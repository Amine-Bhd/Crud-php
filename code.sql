CREATE DATABASE movies_db;
USE movies_db;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50),
    password VARCHAR(50),
    email VARCHAR(100)
);

CREATE TABLE movies (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100),
    director VARCHAR(100),
    release_year INT,
    genre VARCHAR(50),
    status VARCHAR(20)
);