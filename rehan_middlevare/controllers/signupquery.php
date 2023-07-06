<?php
unset($_SESSION['already-exists']);
$name =$_POST['name'];
$email =$_POST['email'];
$password =$_POST['password'];


    try {
        $check = $app['db']->query("SELECT * from users WHERE email = '$email'");
        $exist = $check->fetchAll(PDO::FETCH_OBJ);
//         echo $exist;

        if ($exist) {
            $_SESSION['already-exists'] = "This user already exists";
            print_r($_SESSION['already-exists']);
//            header("location:/signuplogic");
        }
        else
        {

                $insert =$app['db']->query("INSERT into users (username,email,password)
                            VALUES ('$name','$email','$password')");
                $_SESSION['check'] = ['email' => $email];

//                header("location:/");
//                unset($_SESSION['already-exists']);
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }


