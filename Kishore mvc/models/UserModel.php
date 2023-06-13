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
//      return $this->getAllUsers();
         header("location:/");

        // Perform database insert operation using $data
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

    public function getAllUsers() {
       $query =$this->db->query("select * from form");
       $query->execute();
       $datas=$query->fetchAll(PDO::FETCH_OBJ);
       return $datas;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             $query->execute();
        // Retrieve all users from the database
    }
}