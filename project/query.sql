create database project_task;
use project_task;
CREATE TABLE projects(
id int not null AUTO_INCREMENT,
  project_name varchar(255),
    created_at timestamp,
    updated_at timestamp,
    PRIMARY key (project_id)
);

CREATE table tasks(
id int not null AUTO_INCREMENT,
    task varchar (255),
    task_description varchar(255),
    project_id int,
        is_delete int,
     created_at timestamp,
    updated_at timestamp,
     PRIMARY key (task_id),
     FOREIGN KEY (project_id) REFERENCES projects(project_id)

);


<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>project management</title>-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">-->
<!--</head>-->
<!--<body>-->
<!--<div class="container">-->
<!--    <div class="menu">-->
<!--        <div class="logo">logo</div>-->
<!--        <div class="project_list">-->
<!--            <ul class="nav flex-column">-->
<!--                --><?php //foreach ($allprojects as  $projects):?>
<!--                <form action="/createtask" method="post">-->
<!---->
<!--                    <li class="nav-link">--><?php //echo $projects->project_name?><!--</li>-->
<!--                <button name="createtask" type ="submit" value="--><?php //echo $projects->id?><!--">create task</button>-->
<!--                </form>-->
<!---->
<!--            </ul>-->
<!--            --><?php //endforeach;?>
<!--        </div>-->
<!--    </div>-->
<!--    <div class="body_of_container">-->
<!--        <div class="buttons">-->
<!--            <form action="/create" method="post">-->
<!--                <button type ="submit">create projects</button>-->
<!--            </form>-->
<!--            <form action="/deleted" method="post">-->
<!--            <input type="submit" value="Delete">-->
<!---->
<!--            </form>-->
<!--        </div>-->
<!--        <div class="tasks_list">-->
<!--            <ul class="list">-->
<!--                <li>Task-1</li>-->
<!--                <li>Task-2</li>-->
<!--                <li>Task-3</li>-->
<!--                <li>Task-4</li>-->
<!--                <li>Task-5</li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->