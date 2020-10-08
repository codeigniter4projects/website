<?php namespace App\Controllers;

class Download extends BaseController
{
    public function index()
    {
        $data = $this->github->fillReleaseInfo([]);

        echo $this->render('download', $data);
    }
}
