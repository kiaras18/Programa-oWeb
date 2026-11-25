CREATE DATABASE atividade_php;

USE atividade_php;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL
);



ALTER USER 'root'@'localhost' IDENTIFIED BY '12345';