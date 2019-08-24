CREATE DATABASE bbiscuit DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
    

CREATE TABLE contato_cliente(
    id_contato int(3) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_contato varchar(255) NOT NULL,
    telefone_contato varchar(11) NULL,
    email_contato varchar(255) NULL,
    mensagem_contato varchar(255) NOT NULL
)ENGINE=InnoDB;

CREATE TABLE fotos(
    id_foto int(3) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_foto varchar(255) NOT NULL
)ENGINE=InnoDB;

CREATE TABLE usuarios(
    id_usuario int(3) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_usuario varchar(255) NOT NULL,
    telefone_usuario varchar(11) NULL,
    email_usuario varchar(255) NOT NULL,
    senha_usuario varchar(255) NOT NULL,
    foto_usuario varchar(255) default 'usuario'
)ENGINE=InnoDB;

CREATE TABLE mensagens(
    id_mensagem int(3) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_usuario int,
    mensagem text,
    foreign key (id_usuario) references usuarios(id_usuario)
)ENGINE=InnoDB;