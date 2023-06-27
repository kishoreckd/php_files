<?php
require "router/router.php";

$router =new router();

$router->get('/','default');
$router->post('/create','create');
$router->post('/listoftask','listoftask');
$router->post('/createtask','createtask');
$router->post('/addtask','addtask');
$router->post('/taskdescription','taskdescription');
$router->post('/delete','delete');
$router->post('/deleted','deleted');




$router->routing();