<?php

namespace App\Controllers;

use Psr\Http\Client\ClientExceptionInterface;

class Contribute extends BaseController
{
    public function index()
    {
        try {
            $data['contributors'] = [];

            // Get the top 12 contributors for each repo
            foreach ($this->github->getContributors() as $id => $contributors) {
                // Contributors are already sorted, so grab the first 12
                $data['contributors'][$id] = array_slice($contributors, 0, 12);
            }
        } catch (ClientExceptionInterface $e) {
            log_message('error', '[' . __METHOD__ . '] ' . $e::class . ': ' . $e->getMessage());

            $data['contributors'] = null;
        }

        echo $this->render('contribute', $data);
    }
}
