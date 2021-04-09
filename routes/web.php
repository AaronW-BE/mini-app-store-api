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

use App\Exceptions\BaseException;

$router->get('/', function () use ($router) {
    throw new BaseException(\App\Core\ErrorCode::$INTERNAL_ERROR);
//    return $router->app->version();
});
