CREATE DATABASE deepak_project;
use deepak_project;

CREATE TABLE projects(
id int NOT null  AUTO_INCREMENT,
    project_name varchar(255) NOT null,
    created_at timestamp,
    updated_at timestamp,
    PRIMARY KEY(id)
);

CREATE TABLE tasks(
id int NOT null  AUTO_INCREMENT,
    task_name varchar(255),
    task_description varchar(255),
    project_id int,
  created_at timestamp,
    updated_at timestamp,
    deleted_at  timestamp null,
    PRIMARY KEY (id),
    FOREIGN KEY (project_id) REFERENCES projects(id)
);