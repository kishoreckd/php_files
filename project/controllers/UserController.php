<?php
require_once "models/UserModel.php";

class UserController {
    private $userModel;

    public function __construct() {


        $this->userModel = new UserModel();
    }

    public function createNewProjects($project) {
        // Handle form submission for creating a new products
//
        if ($project){
            $this->userModel->insertdata($project['project_name']);
            header("location:/");
        }
        else{
            require "views/create.php";
        }
    }
    public function  createtask($projectid){
        $projectid =$projectid['projectid'];

        require "views/createtask.php";
    }
    public function creatingtask($tasks){
        $this->userModel->creatingtaskDb($tasks['Task_name'],$tasks['Task_Description'],$tasks['project_id']);
        $this->particularProject($tasks["project_id"]);
    }



    public function particularProject($id) {
        $projectId=$id['projectId'];
        $allprojects=$this->userModel->getAllProductsFromDb();
        $particularTask=$this->userModel->listOffTasks($projectId);
        $projectid=$id['projectId'];
        echo $projectid;
        require "views/home.php";

    }

    public function taskdescription($id) {
       $task= $this->userModel->taskdescription($id['id']);
       require "views/taskdescription.php";

    }

    public function listOffAllProjects() {
        // Retrieve all users from the UserModel and load the index view

        $allprojects=$this->userModel->getAllProductsFromDb();
        require 'views/home.php';
    }
    function deletingtask($id){
        $project_id=$id['project_id'];
        $taskid=$id['taskid'];
        $this->userModel->deletingOnDB($id['taskid']);
        $this->particularProject($project_id);


    }
    function deletedTask($id){
        $particularTask=$this->userModel->deletedTask($id['projectId']);

        $allprojects=$this->userModel->getAllProductsFromDb();
        $projectid=$id['projectId'];
require "views/home.php";

    }
    function undeletedTask($id){
        $projectid=$id['projectId'];
        $this->particularProject($projectid);



    }

}
