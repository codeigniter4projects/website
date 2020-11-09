<?php namespace App\Controllers;

use App\Libraries\GitHubHelper;

class Home extends BaseController
{
	public function index()
	{
		$data = [];

		// get the framework release info
		$data = $this->github->fillReleaseInfo($data);

		echo $this->render('home', $data);
	}

}
