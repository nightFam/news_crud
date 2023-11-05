<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('news','NewsController::index');
$routes->get('/news/create','NewsController::createNews');
$routes->post('/news/store','NewsController::storeNews');
$routes->get('/news/edit/(:num)', 'NewsController::editNews/$1');
$routes->post('/news/update/(:num)', 'NewsController::updateNews/$1');
$routes->get('/news/delete/(:num)','NewsController::deleteNews/$1');