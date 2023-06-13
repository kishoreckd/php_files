<?php
require_once "models/UserModel.php";

class UserController {
    private $userModel;

    public function __construct() {


        $this->userModel = new UserModel();
    }

    public function create($user) {
    if ($user){

        $this->userModel->insertdata($user['User_Name'],$user['User_Email'],$user['Password']);
    }

        // Handle form submission for creating a new user
    }

    public function edit($user) {
//        var_dump($user);
        $this->userModel->update($user['id'],$user['User_Name'],$user['User_Email'],$user['Password']);
        require 'views/user/edit.php';

        // Handle form submission for updating an existing user
    }

    public function delete($id) {
        $this->userModel->delete($id);

        // Handle user deletion
    }

    public function index() {
        $alluser=$this->userModel->getAllUsers();
        require 'views/user/index.php';
        // Retrieve all users from the UserModel and load the index view
    }

    public function view($id) {
        $alluser=$this->userModel->read("$id");
        require 'views/user/edit.php';


        // Retrieve a specific user from the UserModel and load the view view
    }
}
