<?php


class guestmiddlevare
{
    public function handling(){
        if (isset($_SESSION['check'])){
            header("location:/");
        }
    }

}
