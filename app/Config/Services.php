<?php

namespace Config;

use App\Libraries\GitHub;
use CodeIgniter\Config\BaseService;
use CodeIgniter\Psr\Cache\Pool;
use Config\GitHub as GitHubConfig;
use Github\Client;
use RuntimeException;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends BaseService
{
    /**
     * Creates or returns the GitHub API wrapper.
     *
     * @param mixed $getShared
     */
    public static function github(?GitHubConfig $config = null, ?Client $client = null, $getShared = true): GitHub
    {
        if ($getShared) {
            return static::getSharedInstance('github', $config, $client);
        }

        if (null === $client) {
            $client = new Client();
            $client->addCache(new Pool(), ['default_ttl' => DAY]);
        }

        $token = env('GITHUB_ACCESS_TOKEN');
        // $token may be null or empty string
        if (empty($token)) {
            throw new RuntimeException('You must set an access token before using the GitHub service.'); // @codeCoverageIgnore
        }

        // Authenticate against GH
        $client->authenticate($token, Client::AUTH_ACCESS_TOKEN);

        return new GitHub($config ?? config(GitHubConfig::class), $client);
    }
}
