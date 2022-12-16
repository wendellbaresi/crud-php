CREATE DATABASE projeto;
USE projeto;


CREATE TABLE arena (
nome VARCHAR(50) PRIMARY KEY,
cnpj VARCHAR(20),
endereco VARCHAR(30),
telefone VARCHAR(12)
);

CREATE TABLE atleta (
nome VARCHAR(50) PRIMARY KEY,
cpf VARCHAR(15),
data_nasc DATE,
sexo ENUM('M','F'),
endereco VARCHAR(30),
telefone VARCHAR(12),
email VARCHAR(50),
tempo_de_ftv VARCHAR(10),
arena_treina VARCHAR(30)
);

