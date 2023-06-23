<?php

class database
{
    public $db;
    public function __construct(){
        try {
            $this->db= new PDO
            ("mysql:host=localhost;dbname=project_task",
                "admin",
                "welcome");

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

class UserModel extends database {
    // Database connection and other necessary properties

    public function insertdata($project_name)
    {
        $this->db->query("Insert into projects (project_name) values ('$project_name')");
//
    }
    public function creatingtaskDb($taskname,$taskdescription,$projectid)
    {
//
        $this->db->query("Insert into tasks (task,task_description,project_id,is_delete) values ('$taskname','$taskdescription','$projectid',1)");

    }



    public function getAllProductsFromDb() {
       $query =$this->db->query("select * from projects");
       $datas=$query->fetchAll(PDO::FETCH_OBJ);
       return $datas;

        // Retrieve all users from the database
    }
    public  function listOffTasks($projectId){

        $isdeletecheck =$this->db->query("SELECT * From tasks where deleted_at is NULL AND project_id=$projectId");
        $datas1=$isdeletecheck->fetchAll(PDO::FETCH_OBJ);
//
            return $datas1;

//
    }
    public function taskdescription($id){
        $query2 =$this->db->query("SELECT * From tasks where id = '$id';");
        $datas2=$query2->fetchAll(PDO::FETCH_OBJ);

        return $datas2;

    }
    public function deletingOnDB($id){

        $this->db->query("UPDATE tasks set deleted_at = now() where id = '$id'");

    }
    public function deletedTask($projectId){
        $isdeletedcheck =$this->db->query("SELECT * From tasks where deleted_at  AND project_id=$projectId");
        $datas1=$isdeletedcheck->fetchAll(PDO::FETCH_OBJ);
        return$datas1;
    }
}