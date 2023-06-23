<?php
require 'controllers/UserController.php';
require 'router/router.php';

$controller = new UserController();
$router = new router();

$router->get('/','list');
$router->post('/create','create');
$router->post('/createtask','createtask');
$router->post('/creatingtask','creatingtask');
$router->post('/project','project');
$router->post('/taskdescription','taskdescription');
$router->post('/deletingtask','deletingtask');
$router->post('/deleted','deleted');
$router->post('/undeleted','undeleted');





//$router->delete('/delete','delete');
//$router->get('/view','view');
//$router->patch('/edit','edit');






$router->routing();

//echo $router->routing();
