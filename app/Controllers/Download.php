<?php

namespace App\Controllers;

use Github\Exception\ExceptionInterface;

class Download extends BaseController
{
    public function index()
    {
    	// Get the latest framework releases
    	try
    	{
	    	$releases = $this->github->getReleases();

			$data = [
				'v3name' => $releases['framework3'][0]->tag,
				'v4name' => $releases['framework4'][0]->tag,
				'v3link' => $releases['framework3'][0]->download_url,
				'v4link' => $releases['framework4'][0]->download_url,
			];
	    }
	    catch (ExceptionInterface $e)
	    {
	    	$data = [
				'v3name' => '<em>unknown</em>',
				'v4name' => '<em>unknown</em>',
				'v3link' => 'https://github.com/bcit-ci/CodeIgniter/releases',
				'v4link' => 'https://github.com/codeigniter4/CodeIgniter4/releases',
	    	];
	    }

        echo $this->render('download', $data);
    }
}
