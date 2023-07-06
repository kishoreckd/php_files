create database login;

use login;

create table users(
    id int not null AUTO_INCREMENT,
    name varchar (255),
    email varchar (255),
    password varchar (255),

    primary  key (id)
);