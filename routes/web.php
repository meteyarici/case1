<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|-------------------------------
-------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get('/', 'UsersController@index');

$router->get('/listone', 'UsersController@listone');

$router->get('/listtwo', 'UsersController@listtwo');

$router->get('/listhree', 'UsersController@listhree');
