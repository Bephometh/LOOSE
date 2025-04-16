<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/AboutUs', 'AboutUs::index');
$routes->get('/WhatsUp', 'WhatsUp::index');