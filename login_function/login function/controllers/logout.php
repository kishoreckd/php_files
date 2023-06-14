<?php

session_destroy();

if (isset($_SESSION['check'])){
    header("location: /login");
}