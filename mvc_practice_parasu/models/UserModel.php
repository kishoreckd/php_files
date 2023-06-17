<?php
class Database
{
    public $db;

    public function __construct()
    {
        try{
            $this->db = new PDO
            (
                'mysql:host=localhost;dbname=mvc',
                'admin',
                'welcome'
            );
//            echo "ok";
        }
        catch(Exception $e){
            die("connection error");
        }
    }

}

class UserModel extends Database {
    // Database connection and other necessary properties

    public function create($data) {
        $usrName = $data["username"];
        $Email = $data["email"];
        $password = $data["password"];
        $this->db->query("INSERT INTO form(name,email,pass)VALUES('$usrName','$Email','$password')");

    }

    public function read($id) {
        $editId = $id;
        $editUser = $this->db->query("SELECT * FROM form where id='$editId'");
        $editUser=  $editUser->fetchAll();
        return $editUser;
    }

    public function update($updateData) {
        $userName = $updateData["username"];
        $email = $updateData["email"];
        $password = $updateData["password"];
        $id = $updateData["update"];
        $this->db->query("UPDATE form SET name='$userName',email='$email',pass='$password' where id = '$id'");
    }

    public function delete($id) {
        $this->db->query("DELETE FROM form where id = '$id'");
    }

    public function list_data() {
        $getData =  $this->db->query("SELECT * FROM form");
        $getData = $getData->fetchAll();
        return$getData;

    }
}

