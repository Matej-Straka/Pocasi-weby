<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('zeme/(:num)', 'Main::getZeme/$1');
$routes->get('stanice/(:num)', 'Main::getStanice/$1');
