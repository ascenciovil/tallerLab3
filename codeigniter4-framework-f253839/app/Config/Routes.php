<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'SolicitudesController::index');
$routes->get('/Solicitudes/profesores','Solicitudes::index');
$routes->get('/Solicitudes/profesores/aceptar','SolicitudesController::aceptar');
$routes->get('/Solicitudes/profesores/declinar','SolicitudesController::declinar');