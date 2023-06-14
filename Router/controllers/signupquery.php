<?php

$name =$_POST['name'];
//echo $name;
$email =$_POST['email'];
$password =$_POST['password'];

if($name == "" && $email == "" && $password == ""){
    header("location: /");
}
else {
    try {
        $check = $app['db']->query("SELECT * from registration WHERE email = '$email'");
        $exist = $check->fetchAll(PDO::FETCH_OBJ);
//         echo $exist;

        if ($exist) {
            $_SESSION['already-exists'] = "This user already exists";
            header("location:/");
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    try {
        $insert =$app['db']->query("INSERT into registration (username,email,password)
                            VALUES ('$name','$email','$password')");
          $_SESSION['check'] = ['email' => $email];

        header("location:/home");
    }
    catch (PDOException $e){
        die($e->getMessage());
    };

}
