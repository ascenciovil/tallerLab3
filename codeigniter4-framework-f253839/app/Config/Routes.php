<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Solicitudes/profesores','SolicitudesController::index');
$routes->get('/Solicitudes/profesores/aceptar','SolicitudesController::aceptar');
$routes->get('/Solicitudes/profesores/declinar','SolicitudesController::declinar');