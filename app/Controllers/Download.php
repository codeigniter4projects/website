<?php

namespace App\Controllers;

use Github\Exception\ExceptionInterface;

class Download extends BaseController
{
    public function index()
    {
        // Get the latest framework releases
        try {
            $releases = $this->github->getReleases();

            $data = [
                'v3name' => end($releases['framework3'])->tag,
                'v4name' => end($releases['framework4'])->tag,
                'v3link' => end($releases['framework3'])->download_url,
                'v4link' => end($releases['framework4'])->download_url,
            ];
        } catch (ExceptionInterface $e) {
            $data = [
                'v3name' => '<em>unknown</em>',
                'v4name' => '<em>unknown</em>',
                'v3link' => 'https://github.com/bcit-ci/CodeIgniter/releases',
                'v4link' => 'https://github.com/codeigniter4/framework/releases',
            ];
        }

        echo $this->render('download', $data);
    }
}
