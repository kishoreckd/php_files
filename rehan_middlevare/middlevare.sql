CREATE DATABASE middlevare;
use middlevare;

CREATE TABLE users (
id int  not null AUTO_INCREMENT,
    username varchar(255),
    email varchar(255) ,
    password varchar(255),
    created_at timestamp,
    updated_at timestamp,
    PRIMARY key (id)
);