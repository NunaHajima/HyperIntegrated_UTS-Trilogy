<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/*Tampilan Website*/
$routes->get('/', 'Home::index');
$routes->get('/news', 'News::index');
$routes->get('/news2', 'News2::index');
$routes->get('/services', 'OurServices::index');
$routes->get('/services2', 'OurServices2::index');
$routes->get('/portofolio', 'Portofolio::index');
$routes->get('/portofolio2', 'Portofolio2::index');
$routes->get('/aboutus', 'AboutUs::index');

/*Admin CRUD*/
$routes->group('', ['filter' => 'authMiddleware'], function($routes) {
    $routes->resource('newscontroller');
});

/*Login*/
$routes->resource('login');
$routes->resource('register');
$routes->get('logout', 'Logout::index');
