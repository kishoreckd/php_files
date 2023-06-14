<?php


require  "connection.php";
require "core/router.php";
session_start();
$app =[];

$app['db']=(new Database())->db;

$router = new router();
$router->post('/','controllers/home.php')->only('auth');
$router->post('/signup','controllers/signup.php')->only('guest');
$router->post('/logout','controllers/logout.php')->only('guest');


require $router->route();

echo $router->route();
