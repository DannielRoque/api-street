<?php

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

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('produtos', 'ProdutosController@store');
    $router->get('produtos', 'ProdutosController@index');
    $router->get('produtos/{id}', 'ProdutosController@show');
    $router->put('produtos/{id}', 'ProdutosController@update');
    $router->delete('produtos/{id}', 'ProdutosController@destroy');
});
