create database db_Jogos;
use db_Jogos;
CREATE TABLE Jogos (
    ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Titulo VARCHAR(100) NOT NULL,
    Plataforma VARCHAR(35) NOT NULL,
    Preco FLOAT(10) NOT NULL
);