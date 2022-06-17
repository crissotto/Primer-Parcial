CREATE DATABASE stock;
USE stock;


CREATE TABLE persona(
    id int primary key auto_increment,
    nombre varchar(25),
    apellido varchar(25),
    telefono int,
    email varchar(25)
);


CREATE TABLE producto(
    id int primary key auto_increment,
    nombre varchar(25),
    descripcion varchar(255),
    stock int 
);


CREATE TABLE compra(
    id_persona int,
    id_producto int,
    fecha_hora datetime,
    foreign key(id_persona) references persona(id),
    foreign key(id_producto) references producto(id),
    primary key(id_persona,id_producto,fecha_hora)
);

INSERT INTO persona (nombre,apellido,telefono,email) 
VALUES ("Joey", "Ramone",12345, "joey@ramone.com"),
       ("Johnny", "Ramone",123456, "johnny@ramone.com"),
       ("Dee Dee ", "Ramone",123457, "deedee@ramone.com"),
       ("Tommy", "Ramone",123459, "tommy@ramone.com");


INSERT INTO producto(nombre, descripcion, stock) 
VALUES ("Silla", 'Silla de madera', 10),
       ("Escritorio", "Escritorio de trabajo", 15),
       ("Cama", "Cama de madera", 20),
       ("Teclado", "Teclado de computadora", 30);