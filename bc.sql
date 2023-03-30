create database tcc;

use tcc;

create table funcionarios(
idfunc int not null primary key auto_increment,
nome varchar(50) not null,
imagem varchar(100),
email varchar(50) not null,
cpf_cad varchar(20) not null,
cep varchar(50) not null,
bairro varchar(50) not null,
cidade varchar(50) not null,
estado varchar(20) not null,
rua varchar(50) not null,
telefone varchar(20) not null,
celular varchar(20) not null,
genero char(10)not null,
data_nasc date not null,
senha varchar(15) not null
);

create table clientes(
idclientes int primary key auto_increment,
nome  varchar(50),
email varchar(50),
cpf varchar(20),
celular varchar(20),
senha varchar(8)
);

create table servicos(
idservico int primary key auto_increment,
image varchar(100),
idnome varchar(50),
servico varchar(150),
conhecimento varchar(50),
idtelefone varchar(15),
preco int(10)
);

create table avaliacao(
id int primary key auto_increment NOT NULL,
qnt_estrela int(11) NOT NULL,
created datetime NOT NULL,
mensagem varchar (150)
);

select * from avaliacao;

select * from clientes;
select * from funcionarios;
select * from servicos;
