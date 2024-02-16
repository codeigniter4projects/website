<?php

namespace App\Controllers;

use Psr\Http\Client\ClientExceptionInterface;

class Home extends BaseController
{
    public function index()
    {
        // Get the latest framework releases
        try {
            $repos = $this->github->getRepos();

            $data = [
                'html_url'         => $repos['framework4']->html_url,
                'stargazers_count' => number_format($repos['codeigniter4']->stargazers_count),
                'forks_count'      => number_format($repos['codeigniter4']->forks_count),
            ];
        } catch (ClientExceptionInterface $e) {
            log_message('error', '[' . __METHOD__ . '] ' . get_class($e) . ': ' . $e->getMessage());

            $data = [
                'html_url'         => 'https://github.com/codeigniter4/CodeIgniter4',
                'stargazers_count' => '',
                'forks_count'      => '',
            ];
        }

        echo $this->render('home', $data);
    }
}
