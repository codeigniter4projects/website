<?php

namespace App\Controllers;

class Disclosures extends BaseController
{
    public function index()
    {
        echo $this->render('disclosures');
    }
}
