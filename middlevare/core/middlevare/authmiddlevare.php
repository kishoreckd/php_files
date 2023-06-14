<?php

class authmiddlevare
{
        public function handling(){
            if (!isset($_SESSION['check'])){
//            echo "head";
                header('location:/signup');
            }

        }
}
