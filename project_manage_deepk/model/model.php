<?php

class database{
    public $db;
    public function __construct()
    {
        try {
            $this->db=new PDO("mysql:host=localhost;dbname=deepak_project",
                "admin",
                "welcome");
        }
        catch (PDOException $e){
            die($e->getMessage());

        }
    }

}

class model extends database {


    public function createprojects($data){
        $this->db->query("insert into projects (project_name) values ('$data')");
    }
    public function getAllProductsFromDb() {
        $query =$this->db->query("select * from projects");
        $datas=$query->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }
    public function addtask($task){
        $task_name =$task['task_name'];
        $task_description=$task['task_description'];
        $project_id =$task['project_id'];


        $this->db->query("insert into tasks (task_name,task_description,project_id) values ('$task_name','$task_description','$project_id')");

    }
    public function listtask($id){
//        var_dump($id);
        $task =$this->db->query("select * from tasks where project_id='$id' and deleted_at is null ");
        $fetch=$task->fetchAll(PDO::FETCH_OBJ);
//                var_dump($fetch);
        return $fetch;
    }

    public function taskdescription($taskid){
        $taskid =$this->db->query("select * from tasks where id ='$taskid'");
        $fetching=$taskid->fetchAll(PDO::FETCH_OBJ);
        return $fetching;
    }
    public function delete($taskid){
        $this->db->query("UPDATE tasks SET deleted_at= now() WHERE id ='$taskid'");
    }
    public function deleted($project_id){
        $deleted = $this->db->query("select * from tasks where project_id='$project_id' and deleted_at ");
        $deleted_task=$deleted->fetchAll(PDO::FETCH_OBJ);
        return $deleted_task;

    }


}