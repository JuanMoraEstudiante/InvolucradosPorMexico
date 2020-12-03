drop database if exists involucrados;
create database involucrados;

use involucrados;


create table empresas(
	id int auto_increment,
    nombre text not null,
    primary key(id)
);

insert into empresas(nombre) values ('DHL');

create table lugares(
	id int auto_increment,
    lugar varchar(250) not null,
    direccion text not null,
    zona varchar(150) not null,
    plazas int(3),
    latitud varchar(100) not null,
    longitud varchar(100) not null,
    primary key(id)
);

create table usuarios(
	id int auto_increment,
    correo varchar(150) not null, 
    clave varchar(50) not null,
    nombre text not null,
    empresa text,
    foto varchar(300),
    tipo varchar(150),
    primary key(id)
);

select * from usuarios;

insert into usuarios(correo, clave, nombre, empresa, foto) values ('prueba@gmail.com','prueba1','Juan Carlos Mora', 'DHL', 'default.jpg');

create table reservaciones(
	id int auto_increment,
    usuario int, 
    lugar int,
    plaza int(3) not null, 
    transporte varchar(15) not null,
    fecha date not null,
    hora time not null,
    primary key(id),
    foreign key(usuario) references usuarios(id),
    foreign key(lugar) references lugares(id)
);