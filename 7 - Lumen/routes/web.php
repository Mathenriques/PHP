<?php

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => '/api', 'middleware' => 'auth'], function () use ($router) {
    $router->group(['prefix' => '/series'], function () use ($router) {
        $router->get('', 'SeriesController@index');
        $router->post('', 'SeriesController@store');
        $router->get('/{id}', 'SeriesController@show');
        $router->put('/{id}', 'SeriesController@update');
        $router->delete('/{id}', 'SeriesController@destroy');

        $router->get('/{serieId}/episodios', 'EpisodiosController@buscaPorSerie');
    });

    $router->group(['prefix' => '/episodios'], function () use ($router) {
        $router->get('', 'EpisodiosController@index');
        $router->post('', 'EpisodiosController@store');
        $router->get('/{id}', 'EpisodiosController@show');
        $router->put('/{id}', 'EpisodiosController@update');
        $router->delete('/{id}', 'EpisodiosController@destroy');
    });

});

$router->post('/api/login', 'TokenController@gerarToken');
