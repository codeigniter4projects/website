<?php

namespace App\Controllers;

class FinePrint extends BaseController
{
    public function index()
    {
        echo $this->render('fine_print');
    }
}
