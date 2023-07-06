<?php

class database
{
    public $db;
    public function __construct(){
        try {
            $this->db= new PDO
            ("mysql:host=localhost;dbname=mvc",
                "admin",
                "welcome");

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

class UserModel extends database {
    // Database connection and other necessary properties

    public function insertdata($name,$email,$password)
    {
      $this->db ->query( "Insert into form (name,email,pass) values ('$name','$email','$password')");
         header("location:/");

        // Perform database insert operation using $data
    }

    public function checkUser($email){

        // checks user whether they are already signed up
        $check = $this->db->query("SELECT * from signup WHERE email = '$email'");
        $exist = $check->fetchAll(PDO::FETCH_OBJ);
        return $exist;

    }
    public function signUp($name,$email,$password)
    {

            $this->db ->query( "Insert into signup (username,email,PASSWORD) 
                                values('$name','$email','$password')");
    }
    public function read($id) {
        $query =$this->db->query("select * from form where id =$id");
        $query->execute();
        $datas=$query->fetchAll(PDO::FETCH_OBJ);
        return $datas;

        // Perform database select operation based on $id
    }

    public function update($id,$name,$email,$password) {

        $this->db ->query("Update form set name ='$name', email='$email',pass='$password' where id='$id'");
        header("location:/");

        // Perform database update operation based on $id and $data
    }

    public function delete($id) {
        $this->db ->query( "DELETE FROM form WHERE id = $id;");
        header("location:/");

        // Perform database delete operation based on $id
    }

    public function getAllUsersFromDb() {
       $query =$this->db->query("select * from form");
       $datas=$query->fetchAll(PDO::FETCH_OBJ);
       return $datas;
        // Retrieve all users from the database
    }
}