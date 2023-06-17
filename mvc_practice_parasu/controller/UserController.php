<?php
require "models/UserModel.php";

class UserController{
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function create($username) {

        if($username){
            $this->userModel->create($username);
            header("location: /");
        }
        else{
            require "views/user/create.php";
        }
    }

    public function edit($id) {
        $Edituser = $this->userModel->read($id);
        require "views/user/edit.php";
        // Handle form submission for updating an existing user
    }

    public function delete($deleteData) {
        $this->userModel->delete($deleteData);
        header("location:/list");
    }

    public function index() {
        require "views/user/index.php";
    }

    public function update($updateData) {
        $this->userModel->update($updateData);
        header("location:/list");
    }
    public function  list_data (){
        $alluserData = $this->userModel->list_data();
        require "views/user/list.php";

    }
}
