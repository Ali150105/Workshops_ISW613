<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/signup', 'User::signup');
$routes->get('/user/signup', 'User::signup');
$routes->get('/user/login', 'User::login');
