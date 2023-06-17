<?php
require "controller/UserController.php";

class Router
{
    public $routes = [];
    public $controller = [];
    public function __construct()

    {
        $this->controller =  new UserController();
    }

    public function get($uri, $controller) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET',
        ];

    }

    public function post($uri, $controller) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST',
        ];

    }

    public function route()
    {
        foreach ($this->routes as $route){
            if($route["uri"] === $_SERVER["REQUEST_URI"]){
                $action  = $route["controller"];
                switch ($action){
                    case "index":
                        $this->controller->index();
                        break;
                    case "create":
                        $this->controller->create($_POST);
                        break;
                    case "list":
                        $this->controller->list_data();
                        break;
                    case "delete":
                        $this->controller->delete($_POST["delete"]);
                        break;
                    case "edit":
                        $this->controller->edit($_POST["edit"]);
                        break;
                    case "update":
                        $this->controller->update($_POST);
                        break;
                }
            }
        }
    }
}
