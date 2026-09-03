CREATE DATABASE biblioteca;
USE biblioteca;

CREATE TABLE livro (
	id_livro int not null auto_increment,
    titulo varchar (255) not null,
    ISBN varchar (13) not null,
    autor varchar (100) not null,
    editora varchar (150) not null,
    categoria varchar (150) not null,
    paginas varchar (30) not null,
    versao varchar (150) not null,
    disponibilidade tinyint
);