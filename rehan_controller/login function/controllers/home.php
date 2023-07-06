<?php

if (!isset($_SESSION['check'])){
    require 'controllers/login.php';
}
else{
    require 'views/home.view.php';
}

