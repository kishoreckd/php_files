<?php
//require 'models/UserModel.php';
class router
{
    public $router = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new UserController();
    }

    public function assign($middleware)
    {
        $this->router[count($this->router) - 1]['middleware'] = $middleware;
    }

    public function get($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
            'middleware' => null
        ];
        return $this;
    }
    public function post($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
            'middleware' => null
        ];
        return $this;
    }
    public function delete($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
            'middleware' => null
        ];
        return $this;
    }
    public function patch($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
            'middleware' => null
        ];
        return $this;
    }


    public function routing()
    {
        foreach ($this->router as $router) {
            if ($router['uri']==$_SERVER['REQUEST_URI']){

                if ($router['middleware'] ==='Guest'){
                    if (!$_SESSION['checking']){
//                        print_r($_SESSION["checking"]);
                        echo "no";
                        header('location:/signUpPage');
                    }
                }
                if ($router['middleware'] === 'Auth'){
                    echo "yes";
                    header('location: /');

                }


                if ($router['action']) {
                    switch ($router['action']) {
                        case 'create':
                            $this->controller->createNewUser($_POST);
                            break;
                        case 'edit':
                            $this->controller->edit($_POST);
                            break;
                        case 'delete':
                            $this->controller->delete($_POST['delete']);
                            break;
                        case 'signUpPage':
                            $this->controller->signUpPage();
                            break;
                        case 'signUp':
                            $this->controller->signUp($_POST);
                            break;
                        case 'logout':
                            $this->controller->logout();
                            break;
                        case 'view':
                            $this->controller->viewOneUser($_POST['view']);
                            break;
                        default:
                            $this->controller->gettingAllUser();
                    }

                } else {
                    $this->controller->getting_all_user();
                }

            }

        }
        exit();

    }
}



