<?php


class guestmiddleware
{
    public function handling(){
        if (isset($_SESSION['check'])){
            header("location:/");
        }
    }

}
