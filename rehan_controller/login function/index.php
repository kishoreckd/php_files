<?php

require 'connection.php';

session_start();

$app = [];

$app['db'] = (new Database())->db;

$routes = [
    '/' => 'controllers/sign.php',
    '/home' => 'controllers/home.php',
    '/about' => 'views/about.view.php',
    '/sign_in' => 'controllers/insert.php',
    '/login' => 'controllers/login.php',
    '/check' => 'controllers/logging.php',
    '/logout' => 'controllers/logout.php'
];

if (array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
    require $routes[$_SERVER['REQUEST_URI']];
}
else {
    http_response_code(404);
    require 'error/404.view.php';
}

