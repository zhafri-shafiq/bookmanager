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

$app->get('/', function () use ($app) {
    return $app->version();
});
<<<<<<< HEAD
=======

$app->get('/a/{name}', function ($name) use ($app) {
    return 'Hello '. $name;
});
>>>>>>> da87e6f40b65a583e519fc84ae443078e9412bd9
