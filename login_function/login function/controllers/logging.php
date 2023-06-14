<?php

$logEmail = $_POST['login_email'];
$logPassword = $_POST['login_pwd'];

try {
    $check = $app['db']->query("SELECT * FROM users WHERE email = '$logEmail' and password = '$logPassword'");
    $dataExists = $check->fetchAll(PDO::FETCH_OBJ);
    header("location: /home");

    if($dataExists){
        header("location: /home");
    }
}
catch (PDOException $e){
    die("User not found in Database: ".$e->getMessage());
}


require 'controllers/home.php';