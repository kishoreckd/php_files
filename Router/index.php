<?php


require  "connection.php";

session_start();

$app =[];

$app['db']=(new Database())->db;


$routes =[
    '/'=>'controllers/signup.php',
    '/signup'=>'controllers/signupquery.php',
     '/home'=>'controllers/home.php'


];

if (array_key_exists($_SERVER['REQUEST_URI'],$routes)){
    require $routes[$_SERVER['REQUEST_URI']];
//   echo $routes[$_SERVER['REQUEST_URI']];
}

else
{
    http_response_code(404);
    require "view/error/error.php";
}