<?php

namespace App\Libraries;

use App\Entities\GitHub\Contributor;
use App\Entities\GitHub\Release;
use App\Entities\GitHub\ReleasePromise;
use App\Entities\GitHub\Repo;
use Closure;
use Config\GitHub as GitHubConfig;
use Github\Client;
use Github\Exception\ExceptionInterface;

/**
 * GitHub Library
 *
 * Wraps the KnpLabs library providing service-ready
 * API access for direct use by Controllers.
 *
 * KnpLabs' client requires PSR-17 and PSR-18 implementations
 * which CodeIgniter does not yet support so the following
 * packages are included with Composer (but can be removed
 * if the framework ever implements these directly):
 * - guzzlehttp/guzzle
 * - http-interop/http-factory-guzzle
 */
class GitHub
{
    /**
     * Our configuration.
     *
     * @var GitHubConfig
     */
    protected $config;

    /**
     * KnpLabs GitHub API Client.
     *
     * @var Client
     */
    private $client;

    /**
     * Store of recent API results.
     *
     * @var array<string,mixed>
     */
    private $storage = [
        'contributors' => null,
        'releases'     => null,
        'repos'        => null,
    ];

    /**
     * Converts tag parts into a browser URL.
     *
     * @param string[] $segments
     */
    public static function urlFromTag(array $segments, string $tag): string
    {
        array_unshift($segments, 'https://github.com');
        array_push($segments, 'releases', 'tag', $tag);

        return implode('/', $segments);
    }

    /**
     * Converts tag parts into a browser URL.
     *
     * @param Release[] $releases
     */
    public static function sortReleases(array &$releases): void
    {
        usort($releases, static function ($releaseA, $releaseB) {
            if ($releaseA->tag === '') {
                return -1;
            }
            if ($releaseB->tag === '') {
                return 1;
            }

            // Strip leading "v"
            $versionA = $releaseA->tag[0] === 'v' ? substr($releaseA->tag, 1) : $releaseA->tag;
            $versionB = $releaseB->tag[0] === 'v' ? substr($releaseB->tag, 1) : $releaseB->tag;

            if ($versionA === $versionB) {
                return 0;
            }

            return version_compare($versionA, $versionB);
        });
    }

    /**
     * Stores the dependencies.
     */
    public function __construct(GitHubConfig $config, Client $client)
    {
        $this->config = $config;
        $this->client = $client;
    }

    //---------------------------------------------------------------------

    /**
     * Interfaces with the client to execute
     * the actual API repo calls.
     *
     * @param array $segments Usually ['organization', 'repository']
     *
     * @throws ExceptionInterface
     */
    protected function api(array $methods, array $segments): array
    {
        // The first method is the API entry point
        $caller = $this->client->api(array_shift($methods));

        // Save the final method since it needs to receive the segments
        $final = array_pop($methods);

        // Call any intermediate methods
        foreach ($methods as $method) {
            $caller = $caller->{$method}();
        }

        // Return the result of the final method
        return $caller->{$final}(...$segments);
    }

    //---------------------------------------------------------------------

    /**
     * Retrieves releases and tags for configured repositories
     * and standardizes each result as a Release (releases)
     * or ReleasePromise (tags).
     *
     * @return array<string,Release[]>
     */
    public function getReleases(): array
    {
        if (null === $this->storage['releases']) {
            $this->storage['releases'] = [];

            foreach ($this->config->repos as $id => $segments) {
                // We only care about frameworks
                if (strpos($id, 'framework') === false) {
                    continue;
                }

                $releases = in_array($id, $this->config->tagged, true)
                    ? $this->fetchTagsAsReleases($segments)
                    : $this->fetchReleasesAsReleases($segments);

                static::sortReleases($releases);
                $this->storage['releases'][$id] = $releases;
            }
        }

        return $this->storage['releases'];
    }

    /**
     * Fetches API results from the releases endpoint
     * and casts each as a Release
     *
     * @param array $segments [organization, repository] from Config
     *
     * @return Release[]
     */
    private function fetchReleasesAsReleases(array $segments): array
    {
        $releases = [];

        foreach ($this->api(['repo', 'releases', 'all'], $segments) as $result) {
            $releases[] = new Release([
                'id'           => $result['id'],
                'name'         => $result['name'],
                'tag'          => $result['tag_name'],
                'author'       => $result['author']['login'],
                'prerelease'   => $result['prerelease'],
                'url'          => $result['html_url'],
                'download_url' => $result['zipball_url'],
                'created_at'   => $result['created_at'],
            ]);
        }

        return $releases;
    }

    /**
     * Fetches API results from the tags endpoint
     * and casts each as a Release.
     *
     * @param array $segments [organization, repository] from Config
     *
     * @return Release[]
     */
    private function fetchTagsAsReleases(array $segments): array
    {
        $releases = [];

        foreach ($this->api(['repo', 'tags'], $segments) as $result) {
            $sha = $result['commit']['sha'];

            $releases[] = new ReleasePromise([
                'id'           => $sha,
                'name'         => $segments[1] . ' ' . $result['name'], // repo name + tag, e.g. 'CodeIgniter v2.1.0'
                'tag'          => $result['name'],
                'prerelease'   => false,
                'url'          => self::urlFromTag($segments, $result['name']),
                'download_url' => $result['zipball_url'],
            ], $this->getResolver(array_merge($segments, [$sha])));
        }

        return $releases;
    }

    /**
     * Creates a Closure to fetch API results from the commit
     * endpoint and return curated values for a ReleasePromise.
     *
     * @param array $segments [organization, repository, sha]
     */
    private function getResolver(array $segments): Closure
    {
        return function () use ($segments) {
            $result = $this->getCommit($segments);

            return [
                'author'     => $result['commit']['author']['name'],
                'created_at' => $result['commit']['author']['date'],
            ];
        };
    }

    /**
     * Fetches API results from the commits endpoint
     * for a single commit.
     *
     * @param array $segments [organization, repository, sha]
     */
    public function getCommit(array $segments): array
    {
        return $this->api(['repo', 'commits', 'show'], $segments);
    }

    //---------------------------------------------------------------------

    /**
     * Retrieves repo details for each configured repository as a Repo.
     *
     * @return Repo[]
     */
    public function getRepos(): array
    {
        if (null === $this->storage['repos']) {
            $this->storage['repos'] = [];

            foreach ($this->config->repos as $id => $segments) {
                $this->storage['repos'][$id] = new Repo($this->api(['repo', 'show'], $segments));
            }
        }

        return $this->storage['repos'];
    }

    //---------------------------------------------------------------------

    /**
     * Retrieves contributor information for a repository.
     *
     * @return array<string,Contributor[]>
     */
    public function getContributors(): array
    {
        if (null === $this->storage['contributors']) {
            $this->storage['contributors'] = [];

            foreach ($this->config->repos as $id => $segments) {
                $this->storage['contributors'][$id] = [];

                foreach ($this->api(['repo', 'contributors'], $segments) as $result) {
                    $this->storage['contributors'][$id][] = new Contributor($result);
                }
            }
        }

        return $this->storage['contributors'];
    }
}
