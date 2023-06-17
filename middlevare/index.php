<?php


require  "connection.php";
require "core/router.php";
session_start();
$app =[];

$app['db']=(new Database())->db;
// copy of class in router

$router = new router();

$router->post('/','controllers/home.php')->only('auth');
$router->post('/signup','controllers/signup.php')->only('guest');
$router->post('/signuplogic','controllers/signupquery.php')->only('guest');
$router->post('/logout','controllers/logout.php')->only('guest');


require $router->route();

