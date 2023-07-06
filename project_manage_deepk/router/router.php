<?php
require "controller/controller.php";

class router{
    public $router =[];
    public $controller;

    public function __construct()
    {
        $this->controller=new controller();
    }

    public function get($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
        ];
        return $this;
    }
    public function post($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
        ];
        return $this;
    }
    public function delete($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'DELETE',
        ];
        return $this;
    }
    public function patch($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'PATCH',
        ];
        return $this;
    }


    public function routing()
    {
        foreach ($this->router as $router) {
            if ($router['uri']==$_SERVER['REQUEST_URI']){
                if ($router['action']) {
                    switch ($router['action']) {
                        case 'create':
                            $this->controller->createNewProjects($_POST);
                            break;
                        case 'listoftask':
                            $this->controller->listOfTasks($_POST);
                            break;
                        case 'createtask':
                            $this->controller->createtask($_POST);
                            break;
                        case 'addtask':
                            $this->controller->addtask($_POST);
                            break;

                        case 'taskdescription':
                             $this->controller->taskdescription($_POST);
                             break;

                        case 'delete':
                            $this->controller->delete($_POST);
                            break;
                        case 'deleted':
                            $this->controller->deleted($_POST);
                            break;
                        default:
                            $this->controller->listOffAllProjects();
                    }

                } else {
                    $this->controller->listOffAllProjects();
                }

            }

        }

    }
}