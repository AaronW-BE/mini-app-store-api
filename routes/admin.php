<?php
/** @var \Laravel\Lumen\Routing\Router $router */


$router->get("/", function () {
    return response()->json([
        "message" => "ok"
    ]);
});
