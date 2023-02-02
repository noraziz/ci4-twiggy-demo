<?php
namespace Home\Config;

// Create a new instance of our RouteCollection class.
$routes = \Config\Services::routes();

$routes->add('/hx', '\Home\Controllers\Cekidot::index');
$routes->add('/ccb', '\Home\Controllers\Cekidot::ccb');