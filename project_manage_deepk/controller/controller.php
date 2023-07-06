<?php
require "model/model.php";

class controller{
    public $model;
    public function __construct()
    {
        $this->model=new model();
    }
    public function createNewProjects($data){
        if ($data){
            $this->model->createprojects($data['project_name']);
            header("location:/");
        }
        else{
            require "view/createProject.php";
        }

    }
    public function listOffAllProjects() {
        $allprojects=$this->model->getAllProductsFromDb();
        require 'view/home.php';
    }
    public function listOfTasks($projectid){

        $projectid= $projectid['project_id'];

        $_SESSION['project_id']=[
            'id'=>$projectid
        ];

        $allprojects=$this->model->getAllProductsFromDb();
        $listtask =$this->model->listtask($projectid);
        $projectid= $projectid['project_id'];

        require "view/home.php";
    }

    public function createtask($project_id){
        $projectid= $project_id['project_id'];
        require "view/createtask.php";

    }
    public function addtask ($data){
        $this->model->addtask($data);
        $this->listOfTasks($data['project_id']);
    }
    public function taskdescription($project_id){
      $particularTask=$this->model->taskdescription($project_id['task_id']);
        $projectid= $project_id['project_id'];
        require "view/taskdescription.php";
    }

    public function delete($data){
        $this->model->delete($data['task_id']);
        $this->listOfTasks($data);
    }
    public function deleted($data){
        $projectid= $data['project_id'];

        $_SESSION['project_id']=[
            'id'=>$data
        ];

        $listtask=  $this->model->deleted($data['project_id']);
        $allprojects=$this->model->getAllProductsFromDb();
        require "view/home.php";

    }
}