<?php

use Illuminate\Support\Facades\View;
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

$router->get('/users', 'UserController@index');
$router->post('/users',  ['middleware' => 'validate.Input', 'uses' => 'UserController@store']);
$router->get('/users/{id}', 'UserController@show');
$router->put('/users/{id}', 'UserController@update');
$router->delete('/users/{id}', 'UserController@destroy');

$router->get('/docs/user-api.json', function () {
    $filePath = base_path('docs/user-api.json');

    if (!file_exists($filePath)) {
        return response()->json(['error' => 'File not found'], 404);
    }
    return response()->file($filePath, ['Content-Type' => 'application/json']);
});

$router->get('/docs/user-api.json', function () {
    return response()->json(json_decode(file_get_contents(base_path('docs/user-api.json'))));
});
