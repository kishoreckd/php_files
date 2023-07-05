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
     created_at timestamp,
    updated_at timestamp,
    deleted_at timestamp null,
     PRIMARY key (task_id),
     FOREIGN KEY (project_id) REFERENCES projects(project_id)

);

CREATE TABLE images(
id int NOT null AUTO_INCREMENT,
    image_path varchar(255),
    tasks_id int,
    PRIMARY KEY(id),
    FOREIGN KEY(tasks_id) REFERENCES tasks(id)
);

CREATE TABLE images(
    id int AUTO_INCREMENT,
    images_path varchar(255),
    module_name int,
    module_id int,
    created_at timestamp,
    updated_at timestamp,
    PRIMARY KEY (id),
    FOREIGN key (module_name) REFERENCES assigned(id) on DELETE CASCADE
);


CREATE TABLE assigned(
id int NOT null AUTO_INCREMENT,
    name varchar(255),
    created_at timestamp,
    updated_at timestamp,
    PRIMARY key (id)
);
    
