<?php

require "core/middlevare/authmiddlevare.php";
require "core/middlevare/guestmiddlevare.php";

class router
{
    public $routes=[];


    public function only($middleware){
        $this->routes[count($this->routes)-1]['middleware']=$middleware;
    }


    public function post($uri,$controller){
        $this->routes[]=[
            'uri'=>$uri,
            'controller'=>$controller,
            'method'=>'POST',
            'middleware'=>NULL
        ];
        return $this;

    }
        public function route(){
            foreach ($this->routes as $route){
                if ($route['uri']===$_SERVER['REQUEST_URI']){
//                    print_r($route);
                    if ($route['middleware'] === 'auth') {
                        (new authmiddlevare())->handling();
                    }

                    if ($route['middleware'] === 'guest') {
                        (new guestmiddlevare())->handling();
                    }
                    return $route['controller'];
                }
            }
        }

}