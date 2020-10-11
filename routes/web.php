<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/*Rutas de produccion*/

$router->get('/produccion', 'ProduccionController@index');
$router->get('/produccion/{id_produccion}', 'ProduccionController@getProduccion');
$router->post('/produccion', 'ProduccionController@createProduccion');

$router->post('/produccion/{id_produccion}', 'ProduccionController@updateProduccion');
$router->delete('/produccion/{id_produccion}', 'ProduccionController@deleteProduccion');


