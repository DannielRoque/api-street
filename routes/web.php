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
    $router->group(['prefix' =>'produtos'], function () use ($router){
        $router->post('', 'ProdutosController@store');
        $router->get('', 'ProdutosController@index');
        $router->get('/{id}', 'ProdutosController@show');
        $router->put('/{id}', 'ProdutosController@update');
        $router->delete('/{id}', 'ProdutosController@destroy');
    });

        $router->group(['prefix' =>'clientes'], function () use ($router){
            $router->post('', 'ClientesController@store');
            $router->get('', 'ClientesController@index');
            $router->get('/{id}', 'ClientesController@show');
            $router->put('/{id}', 'ClientesController@update');
            $router->delete('/{id}', 'ClientesController@destroy');
    });
});
