<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/*Tampilan Website*/
$routes->get('/', 'Home::index');
$routes->get('/news', 'News::index');
$routes->get('news/detail/(:num)', 'News::detail/$1');
$routes->get('/services', 'OurServices::index');
$routes->get('service/detail/(:num)', 'OurServices::detail/$1');
$routes->get('/portofolio', 'Portofolio::index');
$routes->get('/portofolio2', 'Portofolio2::index');
$routes->get('/aboutus', 'AboutUs::index');

/*Admin CRUD*/
$routes->group('', ['filter' => 'authMiddleware'], function($routes) {
    $routes->resource('newscontroller');
});

$routes->group('', ['filter' => 'authMiddleware'], function($routes) {
    $routes->resource('servicescontroller');
});

$routes->group('', ['filter' => 'authMiddleware'], function($routes) {
    $routes->resource('portofoliocontroller');
});

$routes->group('', ['filter' => 'authMiddleware'], function($routes) {
    $routes->resource('aboutuscontroller');
});

$routes->group('', ['filter' => 'authMiddleware'], function($routes) {
    $routes->resource('testimonicontroller');
});

$routes->group('', ['filter' => 'authMiddleware'], function($routes) {
    $routes->resource('slidercontroller');
});

/*Login*/
$routes->resource('login');
$routes->resource('register');
$routes->get('logout', 'Logout::index');
