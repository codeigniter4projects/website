<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('discuss', 'Discuss::index');
$routes->get('contribute', 'Contribute::index');
$routes->get('download', 'Download::index');
$routes->get('policies', 'Policies::index');
$routes->get('the-fine-print', 'FinePrint::index');
$routes->get('security-disclosures', 'Disclosures::index');
