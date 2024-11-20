<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/signup', 'User::signup');
$routes->get('/species', 'Species::index');
$routes->post('user/register', 'User::create');


// $routes->get('tree/(:num)/(:num)', 'Tree::index/$1/$2');


