<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class GitHub extends BaseConfig
{
    /**
     * Cache expiration time for GitHub data
     *
     * @var int
     */
    public $expires = HOUR * 4;

    /**
     * Repository paths
     *
     * @var array<string,string[]> In the format [organization, repository]
     */
    public $repos = [
        'framework3'    => ['bcit-ci', 'CodeIgniter'],
        'framework4'    => ['codeigniter4', 'CodeIgniter4'],
        'translations3' => ['bcit-ci', 'codeigniter3-translations'],
        'translations4' => ['codeigniter4', 'translations'],
        'website3'      => ['bcit-ci', 'codeigniter-website'],
        'website4'      => ['codeigniter4projects', 'website'],
    ];

    /**
     * List of repos that track releases via tags
     *
     * @var string[]
     */
    public $tagged = [
        'framework3',
    ];
}
