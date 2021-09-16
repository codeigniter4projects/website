<?php

namespace Tests\Support\Mock;

use App\Libraries\GitHub;
use Config\GitHub as GitHubConfig;
use Github\Exception\RuntimeException;

/**
 * Mock version of the API class
 * that returns call info and fake
 * data instead of calling the API.
 */
class MockGitHub extends GitHub
{
    /**
     * Whether the next API call should throw
     * an exception.
     *
     * @var bool
     */
    private $throws = false;

    /**
     * Skips the need for parameters
     * since no client is needed.
     */
    public function __construct()
    {
        $this->config = config(GitHubConfig::class);
    }

    /**
     * Sets the next API call to throw an exception.
     *
     * @return $this
     */
    public function throws(bool $throws = true): self
    {
        $this->throws = $throws;

        return $this;
    }

    /**
     * Fakes the actual API repo calls.
     */
    protected function api(array $methods, array $segments): array
    {
        if ($this->throws) {
            throw new RuntimeException('This is your requested exception.');
        }

        $name = array_shift($methods);

        foreach ($methods as $method) {
            $name .= ucfirst($method);
        }

        if (! method_exists($this, $name)) {
            throw new RuntimeException('Mock GitHub is missing a method for ' . $name);
        }

        return $this->{$name}();
    }

    /**
     * Returns a fake commit
     */
    private function repoCommitsShow(): array
    {
        return [
            'sha'     => '0199f68db46d375af2d4cb831c679d3040601f25',
            'node_id' => 'MDY6Q29tbWl0MjIzNDEwMjowMTk5ZjY4ZGI0NmQzNzVhZjJkNGNiODMxYzY3OWQzMDQwNjAxZjI1',
            'commit'  => [
                'author' => [
                    'name'  => 'Phil Sturgeon',
                    'email' => 'redacted@codeigniter.com',
                    'date'  => '2011-11-22T14:57:21Z',
                ],
                'committer' => [
                    'name'  => 'Phil Sturgeon',
                    'email' => 'redacted@codeigniter.com',
                    'date'  => '2011-11-22T15:01:01Z',
                ],
                'message' => 'Readded PDO drivers.',
                'tree'    => [
                    'sha' => 'c9ac0f0b0be5f5efb00907a46e583a57efc495ca',
                    'url' => 'https://api.github.com/repos/bcit-ci/CodeIgniter/git/trees/c9ac0f0b0be5f5efb00907a46e583a57efc495ca',
                ],
                'url' => 'https://api.github.com/repos/bcit-ci/CodeIgniter/git/commits/0199f68db46d375af2d4cb831c679d3040601f25',
            ],
        ];
    }

    /**
     * Returns fake tags
     */
    private function repoTags(): array
    {
        return [
            [
                'name'        => '3.0rc',
                'zipball_url' => 'https://api.github.com/repos/bcit-ci/CodeIgniter/zipball/refs/tags/3.0rc',
                'tarball_url' => 'https://api.github.com/repos/bcit-ci/CodeIgniter/tarball/refs/tags/3.0rc',
                'commit'      => [
                    'sha' => '38d98bcbbd6e70998999971e9cbb53de12410bbf',
                    'url' => 'https://api.github.com/repos/bcit-ci/CodeIgniter/commits/38d98bcbbd6e70998999971e9cbb53de12410bbf',
                ],
                'node_id' => 'MDM6UmVmMjIzNDEwMjpyZWZzL3RhZ3MvMy4wcmM=',
            ],
            [
                'name'        => '2.2.6',
                'zipball_url' => 'https://api.github.com/repos/bcit-ci/CodeIgniter/zipball/refs/tags/2.2.6',
                'tarball_url' => 'https://api.github.com/repos/bcit-ci/CodeIgniter/tarball/refs/tags/2.2.6',
                'commit'      => [
                    'sha' => 'e07de1742fa5a6e6f8ddc7f4a4cf315fbc32c5a2',
                    'url' => 'https://api.github.com/repos/bcit-ci/CodeIgniter/commits/e07de1742fa5a6e6f8ddc7f4a4cf315fbc32c5a2',
                ],
                'node_id' => 'MDM6UmVmMjIzNDEwMjpyZWZzL3RhZ3MvMi4yLjY=',
            ],
        ];
    }

    /**
     * Returns fake releases
     */
    private function repoReleasesAll(): array
    {
        return [
            [
                'url'        => 'https://api.github.com/repos/codeigniter4/CodeIgniter4/releases/37193785',
                'assets_url' => 'https://api.github.com/repos/codeigniter4/CodeIgniter4/releases/37193785/assets',
                'upload_url' => 'https://uploads.github.com/repos/codeigniter4/CodeIgniter4/releases/37193785/assets{?name,label}',
                'html_url'   => 'https://github.com/codeigniter4/CodeIgniter4/releases/tag/v4.1.1',
                'id'         => 37193785,
                'author'     => [
                    'login'      => 'MGatner',
                    'id'         => 17572847,
                    'node_id'    => 'MDQ6VXNlcjE3NTcyODQ3',
                    'avatar_url' => 'https://avatars.githubusercontent.com/u/17572847?v=4',
                    'url'        => 'https://api.github.com/users/MGatner',
                    'html_url'   => 'https://github.com/MGatner',
                    'type'       => 'User',
                    'site_admin' => false,
                ],
                'node_id'          => 'MDc6UmVsZWFzZTM3MTkzNzg1',
                'tag_name'         => 'v4.1.1',
                'target_commitish' => 'master',
                'name'             => 'CodeIgniter 4.1.1',
                'draft'            => false,
                'prerelease'       => false,
                'created_at'       => '2021-02-01T18:26:28Z',
                'published_at'     => '2021-02-01T18:28:39Z',
                'assets'           => [],
                'tarball_url'      => 'https://api.github.com/repos/codeigniter4/CodeIgniter4/tarball/v4.1.1',
                'zipball_url'      => 'https://api.github.com/repos/codeigniter4/CodeIgniter4/zipball/v4.1.1',
                'body'             => 'CodeIgniter 4.1.1 release. Fixed an issue where **.gitattributes** was preventing framework downloads. See `4.1.0` for most recent notes.',
            ],
            [
                'url'        => 'https://api.github.com/repos/codeigniter4/CodeIgniter4/releases/37155037',
                'assets_url' => 'https://api.github.com/repos/codeigniter4/CodeIgniter4/releases/37155037/assets',
                'upload_url' => 'https://uploads.github.com/repos/codeigniter4/CodeIgniter4/releases/37155037/assets{?name,label}',
                'html_url'   => 'https://github.com/codeigniter4/CodeIgniter4/releases/tag/v4.1.0',
                'id'         => 37155037,
                'author'     => [
                    'login'      => 'MGatner',
                    'id'         => 17572847,
                    'node_id'    => 'MDQ6VXNlcjE3NTcyODQ3',
                    'avatar_url' => 'https://avatars.githubusercontent.com/u/17572847?v=4',
                    'url'        => 'https://api.github.com/users/MGatner',
                    'html_url'   => 'https://github.com/MGatner',
                    'type'       => 'User',
                    'site_admin' => false,
                ],
                'node_id'          => 'MDc6UmVsZWFzZTM3MTU1MDM3',
                'tag_name'         => 'v4.1.0',
                'target_commitish' => 'master',
                'name'             => 'CodeIgniter 4.1.0',
                'draft'            => false,
                'prerelease'       => false,
                'created_at'       => '2021-02-01T02:55:33Z',
                'published_at'     => '2021-02-01T02:56:22Z',
                'assets'           => [],
                'tarball_url'      => 'https://api.github.com/repos/codeigniter4/CodeIgniter4/tarball/v4.1.0',
                'zipball_url'      => 'https://api.github.com/repos/codeigniter4/CodeIgniter4/zipball/v4.1.0',
                'body'             => 'CodeIgniter 4.1.0 release. See the changelog: https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md',
            ],
        ];
    }

    /**
     * Returns fake contributors
     */
    private function repoContributors(): array
    {
        return [
            [
                'login'               => 'narfbg',
                'id'                  => 1058011,
                'node_id'             => 'MDQ6VXNlcjEwNTgwMTE=',
                'avatar_url'          => 'https://avatars.githubusercontent.com/u/1058011?v=4',
                'gravatar_id'         => '',
                'url'                 => 'https://api.github.com/users/narfbg',
                'html_url'            => 'https://github.com/narfbg',
                'followers_url'       => 'https://api.github.com/users/narfbg/followers',
                'following_url'       => 'https://api.github.com/users/narfbg/following{/other_user}',
                'gists_url'           => 'https://api.github.com/users/narfbg/gists{/gist_id}',
                'starred_url'         => 'https://api.github.com/users/narfbg/starred{/owner}{/repo}',
                'subscriptions_url'   => 'https://api.github.com/users/narfbg/subscriptions',
                'organizations_url'   => 'https://api.github.com/users/narfbg/orgs',
                'repos_url'           => 'https://api.github.com/users/narfbg/repos',
                'events_url'          => 'https://api.github.com/users/narfbg/events{/privacy}',
                'received_events_url' => 'https://api.github.com/users/narfbg/received_events',
                'type'                => 'User',
                'site_admin'          => false,
                'contributions'       => 3960,
            ],
            [
                'login'               => 'lonnieezell',
                'id'                  => 51931,
                'node_id'             => 'MDQ6VXNlcjUxOTMx',
                'avatar_url'          => 'https://avatars.githubusercontent.com/u/51931?v=4',
                'gravatar_id'         => '',
                'url'                 => 'https://api.github.com/users/lonnieezell',
                'html_url'            => 'https://github.com/lonnieezell',
                'followers_url'       => 'https://api.github.com/users/lonnieezell/followers',
                'following_url'       => 'https://api.github.com/users/lonnieezell/following{/other_user}',
                'gists_url'           => 'https://api.github.com/users/lonnieezell/gists{/gist_id}',
                'starred_url'         => 'https://api.github.com/users/lonnieezell/starred{/owner}{/repo}',
                'subscriptions_url'   => 'https://api.github.com/users/lonnieezell/subscriptions',
                'organizations_url'   => 'https://api.github.com/users/lonnieezell/orgs',
                'repos_url'           => 'https://api.github.com/users/lonnieezell/repos',
                'events_url'          => 'https://api.github.com/users/lonnieezell/events{/privacy}',
                'received_events_url' => 'https://api.github.com/users/lonnieezell/received_events',
                'type'                => 'User',
                'site_admin'          => false,
                'contributions'       => 3027,
            ],
            [
                'login'               => 'jim-parry',
                'id'                  => 3203951,
                'node_id'             => 'MDQ6VXNlcjMyMDM5NTE=',
                'avatar_url'          => 'https://avatars.githubusercontent.com/u/3203951?v=4',
                'gravatar_id'         => '',
                'url'                 => 'https://api.github.com/users/jim-parry',
                'html_url'            => 'https://github.com/jim-parry',
                'followers_url'       => 'https://api.github.com/users/jim-parry/followers',
                'following_url'       => 'https://api.github.com/users/jim-parry/following{/other_user}',
                'gists_url'           => 'https://api.github.com/users/jim-parry/gists{/gist_id}',
                'starred_url'         => 'https://api.github.com/users/jim-parry/starred{/owner}{/repo}',
                'subscriptions_url'   => 'https://api.github.com/users/jim-parry/subscriptions',
                'organizations_url'   => 'https://api.github.com/users/jim-parry/orgs',
                'repos_url'           => 'https://api.github.com/users/jim-parry/repos',
                'events_url'          => 'https://api.github.com/users/jim-parry/events{/privacy}',
                'received_events_url' => 'https://api.github.com/users/jim-parry/received_events',
                'type'                => 'User',
                'site_admin'          => false,
                'contributions'       => 1104,
            ],
        ];
    }

    /**
     * Returns a fake repo
     */
    private function repoShow(): array
    {
        return [
            'id'        => 205950333,
            'node_id'   => 'MDEwOlJlcG9zaXRvcnkyMDU5NTAzMzM=',
            'name'      => 'website2',
            'full_name' => 'codeigniter4projects/website2',
            'private'   => false,
            'owner'     => [
                'login'               => 'codeigniter4projects',
                'id'                  => 53120982,
                'node_id'             => 'MDEyOk9yZ2FuaXphdGlvbjUzMTIwOTgy',
                'avatar_url'          => 'https://avatars.githubusercontent.com/u/53120982?v=4',
                'gravatar_id'         => '',
                'url'                 => 'https://api.github.com/users/codeigniter4projects',
                'html_url'            => 'https://github.com/codeigniter4projects',
                'followers_url'       => 'https://api.github.com/users/codeigniter4projects/followers',
                'following_url'       => 'https://api.github.com/users/codeigniter4projects/following{/other_user}',
                'gists_url'           => 'https://api.github.com/users/codeigniter4projects/gists{/gist_id}',
                'starred_url'         => 'https://api.github.com/users/codeigniter4projects/starred{/owner}{/repo}',
                'subscriptions_url'   => 'https://api.github.com/users/codeigniter4projects/subscriptions',
                'organizations_url'   => 'https://api.github.com/users/codeigniter4projects/orgs',
                'repos_url'           => 'https://api.github.com/users/codeigniter4projects/repos',
                'events_url'          => 'https://api.github.com/users/codeigniter4projects/events{/privacy}',
                'received_events_url' => 'https://api.github.com/users/codeigniter4projects/received_events',
                'type'                => 'Organization',
                'site_admin'          => false,
            ],
            'html_url'          => 'https://github.com/codeigniter4projects/website2',
            'description'       => 'CodeIgniter.com website',
            'fork'              => false,
            'url'               => 'https://api.github.com/repos/codeigniter4projects/website2',
            'forks_url'         => 'https://api.github.com/repos/codeigniter4projects/website2/forks',
            'keys_url'          => 'https://api.github.com/repos/codeigniter4projects/website2/keys{/key_id}',
            'collaborators_url' => 'https://api.github.com/repos/codeigniter4projects/website2/collaborators{/collaborator}',
            'teams_url'         => 'https://api.github.com/repos/codeigniter4projects/website2/teams',
            'hooks_url'         => 'https://api.github.com/repos/codeigniter4projects/website2/hooks',
            'issue_events_url'  => 'https://api.github.com/repos/codeigniter4projects/website2/issues/events{/number}',
            'events_url'        => 'https://api.github.com/repos/codeigniter4projects/website2/events',
            'assignees_url'     => 'https://api.github.com/repos/codeigniter4projects/website2/assignees{/user}',
            'branches_url'      => 'https://api.github.com/repos/codeigniter4projects/website2/branches{/branch}',
            'tags_url'          => 'https://api.github.com/repos/codeigniter4projects/website2/tags',
            'blobs_url'         => 'https://api.github.com/repos/codeigniter4projects/website2/git/blobs{/sha}',
            'git_tags_url'      => 'https://api.github.com/repos/codeigniter4projects/website2/git/tags{/sha}',
            'git_refs_url'      => 'https://api.github.com/repos/codeigniter4projects/website2/git/refs{/sha}',
            'trees_url'         => 'https://api.github.com/repos/codeigniter4projects/website2/git/trees{/sha}',
            'statuses_url'      => 'https://api.github.com/repos/codeigniter4projects/website2/statuses/{sha}',
            'languages_url'     => 'https://api.github.com/repos/codeigniter4projects/website2/languages',
            'stargazers_url'    => 'https://api.github.com/repos/codeigniter4projects/website2/stargazers',
            'contributors_url'  => 'https://api.github.com/repos/codeigniter4projects/website2/contributors',
            'subscribers_url'   => 'https://api.github.com/repos/codeigniter4projects/website2/subscribers',
            'subscription_url'  => 'https://api.github.com/repos/codeigniter4projects/website2/subscription',
            'commits_url'       => 'https://api.github.com/repos/codeigniter4projects/website2/commits{/sha}',
            'git_commits_url'   => 'https://api.github.com/repos/codeigniter4projects/website2/git/commits{/sha}',
            'comments_url'      => 'https://api.github.com/repos/codeigniter4projects/website2/comments{/number}',
            'issue_comment_url' => 'https://api.github.com/repos/codeigniter4projects/website2/issues/comments{/number}',
            'contents_url'      => 'https://api.github.com/repos/codeigniter4projects/website2/contents/{+path}',
            'compare_url'       => 'https://api.github.com/repos/codeigniter4projects/website2/compare/{base}...{head}',
            'merges_url'        => 'https://api.github.com/repos/codeigniter4projects/website2/merges',
            'archive_url'       => 'https://api.github.com/repos/codeigniter4projects/website2/{archive_format}{/ref}',
            'downloads_url'     => 'https://api.github.com/repos/codeigniter4projects/website2/downloads',
            'issues_url'        => 'https://api.github.com/repos/codeigniter4projects/website2/issues{/number}',
            'pulls_url'         => 'https://api.github.com/repos/codeigniter4projects/website2/pulls{/number}',
            'milestones_url'    => 'https://api.github.com/repos/codeigniter4projects/website2/milestones{/number}',
            'notifications_url' => 'https://api.github.com/repos/codeigniter4projects/website2/notifications{?since,all,participating}',
            'labels_url'        => 'https://api.github.com/repos/codeigniter4projects/website2/labels{/name}',
            'releases_url'      => 'https://api.github.com/repos/codeigniter4projects/website2/releases{/id}',
            'deployments_url'   => 'https://api.github.com/repos/codeigniter4projects/website2/deployments',
            'created_at'        => '2015-08-27T03:32:45Z',
            'updated_at'        => '2021-05-15T22:10:18Z',
            'pushed_at'         => '2021-05-15T20:03:10Z',
            'git_url'           => 'git://github.com/codeigniter4projects/website2.git',
            'ssh_url'           => 'git@github.com:codeigniter4projects/website2.git',
            'clone_url'         => 'https://github.com/codeigniter4projects/website2.git',
            'svn_url'           => 'https://github.com/codeigniter4projects/website2',
            'homepage'          => null,
            'size'              => 930,
            'stargazers_count'  => 40,
            'watchers_count'    => 40,
            'language'          => 'PHP',
            'has_issues'        => true,
            'has_projects'      => true,
            'has_downloads'     => true,
            'has_wiki'          => true,
            'has_pages'         => false,
            'forks_count'       => 31,
            'mirror_url'        => null,
            'archived'          => false,
            'disabled'          => false,
            'open_issues_count' => 5,
            'license'           => [
                'key'     => 'mit',
                'name'    => 'MIT License',
                'spdx_id' => 'MIT',
                'url'     => 'https://api.github.com/licenses/mit',
                'node_id' => 'MDc6TGljZW5zZTEz',
            ],
            'forks'            => 31,
            'open_issues'      => 5,
            'watchers'         => 40,
            'default_branch'   => 'develop',
            'temp_clone_token' => null,
            'organization'     => [
                'login'               => 'codeigniter4projects',
                'id'                  => 53120982,
                'node_id'             => 'MDEyOk9yZ2FuaXphdGlvbjUzMTIwOTgy',
                'avatar_url'          => 'https://avatars.githubusercontent.com/u/53120982?v=4',
                'gravatar_id'         => '',
                'url'                 => 'https://api.github.com/users/codeigniter4projects',
                'html_url'            => 'https://github.com/codeigniter4projects',
                'followers_url'       => 'https://api.github.com/users/codeigniter4projects/followers',
                'following_url'       => 'https://api.github.com/users/codeigniter4projects/following{/other_user}',
                'gists_url'           => 'https://api.github.com/users/codeigniter4projects/gists{/gist_id}',
                'starred_url'         => 'https://api.github.com/users/codeigniter4projects/starred{/owner}{/repo}',
                'subscriptions_url'   => 'https://api.github.com/users/codeigniter4projects/subscriptions',
                'organizations_url'   => 'https://api.github.com/users/codeigniter4projects/orgs',
                'repos_url'           => 'https://api.github.com/users/codeigniter4projects/repos',
                'events_url'          => 'https://api.github.com/users/codeigniter4projects/events{/privacy}',
                'received_events_url' => 'https://api.github.com/users/codeigniter4projects/received_events',
                'type'                => 'Organization',
                'site_admin'          => false,
            ],
            'network_count'     => 31,
            'subscribers_count' => 10,
        ];
    }
}
