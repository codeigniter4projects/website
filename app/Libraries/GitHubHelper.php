<?php namespace App\Libraries;

class GitHubHelper
{
    /**
     * @var GithubAPI
     */
    protected $api;

    protected $astar = '★';

    public function __construct()
    {
        $this->api = new GithubAPI();
    }

    /**
     * Gets all of the core information we need from GitHub.
     *
     * @param array $data
     *
     * @return array
     */
    public function fillAllInfo(array $data): array
    {
        $data = $this->fillReleaseInfo($data);
        $data = $this->fillRepoInfo($data);

        return $data;
    }

    /**
     * Will hit up the API and get the current
     * version of the frameworks, etc.
     *
     * @param array $data
     *
     * @return array
     */
    public function fillReleaseInfo(array $data): array
    {
        $ttl = config('App')->gitHubExpires;

        if (! $info4 = cache('info4')) {
            $info4 = $this->api->getLatestRelease('codeigniter4', 'framework');
            cache()->save('info4', $info4, $ttl);
        }
        $data['v4name'] = $info4['tag_name'];
        $data['v4link'] = $info4['zipball_url'];

        if (! $info3 = cache('info3')) {
            $info3 = $this->api->getLatestTag('bcit-ci', 'CodeIgniter');
            cache()->save('info3', $info3, $ttl);
        }
        $data['v3name'] = $info3['name'];
        $data['v3link'] = $info3['zipball_url'];

        if (! $info5 = cache('info5')) {
            $info5 = $this->api->getLatestRelease('bcit-ci', 'codeigniter3-translations');
            cache()->save('info5', $info5, $ttl);
        }
        $data['v3trans'] = $info5['tag_name'];

        return $data;
    }

    /**
     * Fills in stats about the repo, including stars and forks.
     *
     * @param array $data
     *
     * @return array
     */
    public function fillRepoInfo(array $data): array
    {
        $ttl = config('App')->gitHubExpires;

        // get the repo stats
        if ( ! $info = cache('repo_info'))
        {
            $info = $this->api->getRepoInfo('codeigniter4', 'CodeIgniter4');
            cache()->save('repo_info', $info, $ttl);
        }

        if (! empty($info)) {
            $data['html_url'] = $info['html_url'];
            $data['stargazers_count'] = number_format($info['stargazers_count']);
            $data['forks_count'] = number_format($info['forks_count']);
        }

        return $data;
    }

    /**
     * Grab the "hero" data for our contribute page from Github,
     * caching to speed things up.
     *
     * @param array $data
     *
     * @return array
     */
    public function fillHeroes(array $data): array
    {
        $ttl = config('App')->gitHubExpires;

        // get the framework heroes
        if ( ! $info = cache('fw_heroes'))
        {
            $info = $this->api->getContributors('bcit-ci', 'CodeIgniter');
            cache()->save('fw_heroes', $info, $ttl);
        }
        $data['fw_heroes'] = $this->hitparade($info);

        // get the translation heroes
        if ( ! $info = cache('trans_heroes'))
        {
            $info = $this->api->getContributors('bcit-ci', 'codeigniter3-translations');
            cache()->save('trans_heroes', $info, $ttl);
        }
        $data['trans_heroes'] = $this->hitparade($info);

        // get the CodeIgniter4 heroes
        if ( ! $info = cache('ci4_heroes'))
        {
            $info = $this->api->getContributors('codeigniter4', 'CodeIgniter4');
            cache()->save('ci4_heroes', $info, $ttl);
        }
        $data['ci4_heroes'] = $this->hitparade($info);

        // get the translation heroes
        if ( ! $info = cache('trans4_heroes'))
        {
            $info = $this->api->getContributors('codeigniter4', 'translations');
            cache()->save('trans4_heroes', $info, $ttl);
        }
        $data['trans4_heroes'] = $this->hitparade($info);

        // get the website heroes
        if ( ! $info = cache('web_heroes'))
        {
            $info = $this->api->getContributors('bcit-ci', 'codeigniter-website');
            cache()->save('web_heroes', $info, $ttl);
        }
        $data['web_heroes'] = $this->hitparade($info);

        // and the new website heroes
        if ( ! $info = cache('new_web_heroes'))
        {
            $info = $this->api->getContributors('codeigniter4projects', 'website2');
            cache()->save('new_web_heroes', $info, $ttl);
        }
        $data['new_web_heroes'] = $this->hitparade($info);

        return $data;
    }

    /**
     * build the hit parade for this group of contributors
     *
     * @param $info
     *
     * @return string
     */
    protected function hitparade($info)
    {
        if (empty($info))
        {
            return '';
        }

        $heroes = [];

        foreach ($info as $val)
        {
            $heroes[] = [
                'avatar' => $val['avatar_url'],
                'name'	 => $val['login'],
                'url'	 => $val['html_url'],
                'stars'	 => $this->stars($val['contributions'])
            ];
        }

        return $heroes;
    }

    /**
     * determine how many stars a contributor earns
     *
     * @param $contributions
     *
     * @return string
     */
    protected function stars($contributions)
    {
        $result = $this->astar;
        while ($contributions > 9)
        {
            $result .= $this->astar;
            $contributions /= 10;
        }
        return $result;
    }
}
