<?php

namespace App\Controllers;

class Discuss extends BaseController
{
    public function index()
    {
        echo $this->render('discuss');
    }
}
