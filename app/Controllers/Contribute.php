<?php namespace App\Controllers;

class Contribute extends BaseController
{
    public function index()
    {
        // Grab our contributor info
        $data = $this->github->fillHeroes([]);

        echo $this->render('contribute', $data);
    }
}
