 CREATE DATABASE Deportescr;

 CREATE TABLE Empleados(
    id_empleado int primary key not null auto_increment,
    nom_empleado varchar(20)not null,
    apellidos varchar(20)not null,
    puesto varchar(20));
    
 CREATE TABLE AcercaDe(
	id_acerca INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_empleado int NOT NULL,
    descripcion varchar(100),
    foreign key(id_empleado)references Empleados(id_empleado));

 CREATE TABLE Usuarios(
	id_usuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(40) NOT NULL,
    apellidos VARCHAR(40) NOT NULL,
    fec_nac DATE NOT NULL,
    email VARCHAR(40) NOT NULL,
    username VARCHAR(40) NOT NULL,
    pass VARCHAR(100) NOT NULL);

 CREATE TABLE Contacto(
	id_contact INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(100),
    foreign key(id_contact) references Usuarios(id_usuario));
    
 CREATE TABLE Tipo_Deporte(
   id_deporte int primary key not null auto_increment,
   tipo_deporte varchar(2)not null,
   descripcion varchar(100));
    
 CREATE TABLE Mercaderia(
   id_mercaderia INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
   id_deporte int not null,
   tipo_mercaderia varchar(10)NOT NULL,
   precio double NOT NULL,
   stock bool NOT NULL,
   descripcion varchar(100),
   foreign key(id_deporte)references TIPO_DEPORTE(id_deporte));
  
 CREATE TABLE Noticias(
   id_noticias INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
   id_mercaderia int not null,
   titulo VARCHAR(40) NOT NULL,
   descripcion VARCHAR(100) NOT NULL,
   link VARCHAR(200) NOT NULL,
   foreign key(id_mercaderia)references Mercaderia(id_mercaderia));
  
CREATE TABLE Ventas(
   id_ventas int primary key not null auto_increment,
   fecha date not null,
   monto double not null,
   descripcion varchar(100)not null,
   id_usuario int not null,
   id_empleado int not null,
   id_mercaderia int not null,
   foreign key(id_usuario)references Usuarios(id_usuario),
   foreign key(id_empleado)references Empleados(id_empleado),
   foreign key(id_mercaderia)references Mercaderia(id_mercaderia));
  
CREATE TABLE Facturas(
   id_factura int not null primary key auto_increment,
   id_ventas int not null,
   num_factura int not null,
   fecha date not null,
   descripcion varchar(100),
   foreign key(id_ventas)references Ventas(id_ventas));









