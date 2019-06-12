Create database loja;

Use loja;


create table usuario (
idUsuario int(11) not null auto_increment,
nomeUsuario varchar(60) not null,
email varchar(60) not null,
senha varchar(60) not null,
cpf varchar(60) not null,
datadenascimento varchar(10) not null,
sexo varchar(60) not null,
tipoUsuario varchar(5) not null,
primary key (idUsuario)
);


create table produtos (
idproduto int(11) auto_increment not null,
idcategoria int  not null,
preco double not null,
nomeproduto varchar(30) not null,
descricao varchar(60) not null,
imagem varchar(60) not null,
estoque_minimo int(11) not null,
estoque_maximo int(11) not null,
primary key (idproduto),
foreign key(idcategoria) references categoria(idcategoria)) ;


Create table categoria(
idcategoria int auto_increment  not null,
descricao varchar (50) not null,
primary key (idcategoria)
);

