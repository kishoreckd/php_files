<?php


//unset($_SESSION['already-exist']);
//if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

//}

if($name == "" && $email == "" && $pwd == ""){
    header("location: /");
}
else{
    try {
        $select = $app['db']->query("SELECT * from users WHERE email = '$email'");
        $exist = $select->fetchAll(PDO::FETCH_OBJ);

        if($exist){
            $_SESSION['already-exist'] = "This user already exist";
            header("location: /");
            }
        }
    catch(PDOException $e){
        die($e->getMessage());
    }

    try {

        $insert = $app['db']->query("INSERT INTO users(name, email, password) VALUE ('$name', '$email', '$pwd')");
        header("location: /home");

        $_SESSION['name'] = [
            'name' => $name
        ];

        $_SESSION['check'] = [
            'email' => $email
        ];

    }
    catch (PDOException $e){
        die("Inserting error: ".$e->getMessage());
    }
}




require 'views/login.view.php';