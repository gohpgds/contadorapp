create database  if not exists  Contador;
use Contador; 
CREATE TABLE if not exists contador
(
codigo int (11) NOT NUll auto_increment,
nome varchar(100),
numero int (20),
primary key (codigo)
);

select * from contador;

create user 'contador'@'localhost' identified by 'senha123';

grant all privileges on Contador.* TO 'contador'@'localhost';


