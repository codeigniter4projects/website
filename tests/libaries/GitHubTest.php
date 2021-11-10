<?php

namespace App\Entities\GitHub;

use App\Libraries\GitHub;
use Config\Services;
use Tests\Support\Mock\MockGitHub;
use Tests\Support\ProjectTestCase;

/**
 * @internal
 */
final class GitHubTest extends ProjectTestCase
{
    /**
     * @var MockGitHub
     */
    private $github;

    protected function setUp(): void
    {
        parent::setUp();

        $this->github = new MockGitHub();
        Services::injectMock('github', $this->github);
    }

    public function testUrlFromTag()
    {
        $expected = 'https://github.com/bcit-ci/CodeIgniter/releases/tag/v2.1.0';
        $result   = GitHub::urlFromTag(['bcit-ci', 'CodeIgniter'], 'v2.1.0');

        $this->assertSame($expected, $result);
    }

    public function testSortReleases()
    {
        $input = [
            '4.0.0-alpha.1',
            'v4.1.1',
            'v3.2',
            'v4.0.0-rc1',
            'v3.2-hotfix',
            '4.0.0-alpha2',
            '3.1.0',
            '4.0.0-rc2',
            '',
            'v2',
            '2',
            'v',
        ];

        $expected = [
            '',
            'v',
            'v2',
            '2',
            '3.1.0',
            'v3.2-hotfix',
            'v3.2',
            '4.0.0-alpha.1',
            '4.0.0-alpha2',
            'v4.0.0-rc1',
            '4.0.0-rc2',
            'v4.1.1',
        ];

        $releases = [];

        foreach ($input as $version) {
            $releases[] = new Release(['tag' => $version]);
        }

        GitHub::sortReleases($releases);
        $result = array_column($releases, 'tag');

        $this->assertSame($expected, $result);
    }

    public function testServiceDefault()
    {
        $result = service('github', null, null, false);

        $this->assertInstanceOf(GitHub::class, $result);
    }

    public function testServiceUsesConfig()
    {
        config('GitHub')->expires = 42;

        $github = single_service('github');
        $result = $this->getPrivateProperty($github, 'config');

        $this->assertSame(42, $result->expires);
    }

    public function testLiveUsesCache()
    {
        $this->assertSame([], cache()->getCacheInfo());

        $github = service('github', null, null, false);
        $github->getCommit(['bcit-ci', 'CodeIgniter', '0199f68db46d375af2d4cb831c679d3040601f25']);

        $result = cache()->getCacheInfo();

        $this->assertNotSame([], $result);
        $this->assertCount(1, $result);
    }

    public function testGetRepos()
    {
        $result = $this->github->getRepos();

        $this->assertIsArray($result);
        $this->assertCount(count(config('GitHub')->repos), $result);
        $this->assertInstanceOf(Repo::class, $result['framework4']);
    }

    public function testGetContributors()
    {
        $result = $this->github->getContributors();

        $this->assertIsArray($result);
        $this->assertCount(count(config('GitHub')->repos), $result);
        $this->assertInstanceOf(Contributor::class, $result['framework4'][0]);
    }

    public function testGetReleases()
    {
        $result = $this->github->getReleases();

        $this->assertIsArray($result);
        $this->assertCount(2, $result); // Release only pull for frameworks
        $this->assertInstanceOf(Release::class, $result['framework4'][0]);
    }

    public function testGetResolver()
    {
        $segments = ['bcit-ci', 'CodeIgniter', '0123456789abcdefg0123456789abcdefg012345'];
        $method   = $this->getPrivateMethodInvoker($this->github, 'getResolver');
        $resolver = $method($segments);

        $this->assertInstanceOf('Closure', $resolver);

        $this->assertSame([
            'author'     => 'Phil Sturgeon',
            'created_at' => '2011-11-22T14:57:21Z',
        ], $resolver());
    }

    public function testResolving()
    {
        // Focus on a single tagged repo to speed things up
        config('GitHub')->repos = [
            'framework3' => ['bcit-ci', 'CodeIgniter'],
        ];

        $releases = single_service('github')->getReleases()['framework3'];
        $release  = $releases[0];

        $this->assertInstanceOf(ReleasePromise::class, $release);
        $this->assertArrayNotHasKey('author', $release->toRawArray());

        $result = $this->getPrivateProperty($release, 'resolver');
        $this->assertInstanceOf('Closure', $result);

        // Force the resolver to run
        $count  = count(cache()->getCacheInfo());
        $author = $release->author;

        $this->assertIsString($author);
        $this->assertArrayHasKey('author', $release->toRawArray());
        $this->assertCount($count + 1, cache()->getCacheInfo());

        $result = $this->getPrivateProperty($release, 'resolver');
        $this->assertNull($result);
    }
}
