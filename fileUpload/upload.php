<?php
require 'connection.php';
$app['db'] = (new Database())->db;

if (isset($_FILES["file"])){

    $file = $_FILES["file"];
    move_uploaded_file($file["tmp_name"],"upload/" .$file["name"]);

   $filePath= "upload/".$file["name"];


    $insert = $app['db']->query("INSERT INTO upload (file_path)VALUES('$filePath')");

    header("location:index.php");
}
else{
    header("location:index.php");
}

