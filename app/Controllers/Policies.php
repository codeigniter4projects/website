<?php

namespace App\Controllers;

class Policies extends BaseController
{
    public function index()
    {
        echo $this->render('policies');
    }
}
