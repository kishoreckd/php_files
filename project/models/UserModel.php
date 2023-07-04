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
    public function creatingtaskDb($taskname,$taskdescription,$projectid,$file)
    {
//
        $this->db->query("Insert into tasks (task,task_description,project_id) values ('$taskname','$taskdescription','$projectid')");
        $getting_data=$this->db->query("select * from images order by id desc limit 1");
        $getting_data=  $getting_data->fetch(PDO::FETCH_OBJ);
        $tasksTotal = count($file['task']['name']);
        for( $i=0 ; $i < $tasksTotal ; $i++ ) {
            $newFilePath = "images/".$file['task']['name'][$i];
            $tmpFilePath = $file['task']['tmp_name'][$i];
            move_uploaded_file($tmpFilePath, $newFilePath);
            $this->db->query("Insert into images (images_path,module_name,module_id) values ('$newFilePath','task','$getting_data->id')");
        }

    }



    public function getAllProductsFromDb() {
       $query =$this->db->query("select * from projects");
       $datas=$query->fetchAll(PDO::FETCH_OBJ);
       return $datas;

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
    public function deletedTaskcount($projectId){
        $isdeletedcheck =$this->db->query("SELECT COUNT(id) FROM tasks WHERE deleted_at AND project_id ='$projectId';");
         return$isdeletedcheck->fetch(PDO::FETCH_NUM);
    }
    public  function undeletedTaskcount($projectId){

        $isdeletecheck =$this->db->query("SELECT COUNT(id)  From tasks where deleted_at is NULL AND project_id='$projectId'");
        return $isdeletecheck->fetch(PDO::FETCH_NUM);
    }
}
