drop database if exists carrocinha;
create database if not exists carrocinha;
use carrocinha;

-- tabela Cidade
create table cidade(
id int primary key auto_increment,
nome varchar(45),
estado varchar(2)
);

-- tabela Pessoa
create table pessoa(
id int(13) primary key auto_increment,
nome varchar(45),
email varchar(45),
endereco varchar(45),
bairro varchar(45),
cep int(8),
id_cidade int,
constraint fk_clientecidade foreign key(id_cidade) references cidade(id)
);

-- tabela Animal
create table animal(
id int primary key auto_increment,
nome varchar(45),
especie varchar(50),
raca varchar(50),
data_nascimento date,
idade int(3),
castrado bool,
id_pessoa int,
constraint fk_animalpessoa foreign key(id_pessoa) references pessoa(id)
);
