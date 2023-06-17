<?php
require 'controllers/UserController.php';
require 'router/router.php';

session_start();
$controller = new UserController();
$router = new router();

$router->get('/','list')->assign('Auth');
$router->post('/create','create')->assign('Auth');
$router->delete('/delete','delete')->assign('Auth');
$router->get('/view','view')->assign('Auth');
$router->patch('/edit','edit')->assign('Auth');

$router->post('/signUpPage','signUpPage')->assign('Guest');
$router->post('/signUp','signUp')->assign('Guest');
$router->post('/logout','logout')->assign('Auth');







$router->routing();

//echo $router->routing();
