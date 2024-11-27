Create database cadastro;
use cadastro;

create table tb_funcionario(
id_funcionario int primary key auto_increment,
nm_funcionario varchar (45) not null,
dt_nascimento date not null,
cargo varchar(20) not null,
salario decimal(6,2) not null,
dt_adimissao date not null,
senha text not null
);

create table tb_cliente(
id_cliente int primary key auto_increment,
nm_cliente varchar(45) not null,
CPF char(11) not null,
nm_email varchar(45) not null,
nr_telefone char(13) not null,
nm_endereco varchar(45) not null,
nr_endereco int not null
);
 
create table tb_fornecedor(
id_fornecedor int primary key auto_increment,
nm_fornecedor varchar(45) not null,
contato varchar(45) not null,
email varchar(60) not null,
telefone varchar(13) not null,
nm_endereco varchar(100) not null,
nr_endereco int not null
);

create table tb_categoria(
id_categoria int primary key auto_increment,
nm_categoria varchar(45) not null,
ds_categoria text not null
);

create table tb_lançamento(
id_lançamento int primary key auto_increment,
ds_lançamento text not null,
valor  decimal(6,2) not null,
tipo varchar(50) not null,
dt_lancamento date not null,
fk_id_funcionario int,
fk_id_categoria int,
foreign key (fk_id_funcionario) references tb_funcionario(id_funcionario),
foreign key (fk_id_categoria) references tb_categoria(id_categoria)
);
