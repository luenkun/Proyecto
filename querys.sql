DROP TABLE ig31_usuarios;

CREATE TABLE ig31_usuarios (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(20) DEFAULT NULL,
  apellidos varchar(45) DEFAULT NULL,
  dni varchar(10) DEFAULT NULL,
 nss varchar(10) DEFAULT NULL,
 edad tinyint(3) unsigned DEFAULT NULL,
 rol int(11) NOT NULL,
  usuario varchar(15) DEFAULT NULL,
  password varchar(10) DEFAULT NULL,
  PRIMARY KEY (id)
 );

CREATE TABLE ig31_clientes (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(20) DEFAULT NULL,
  apellidos varchar(45) DEFAULT NULL,
  dni varchar(10) DEFAULT NULL,
  usuario varchar(15) DEFAULT NULL,
  password varchar(10) DEFAULT NULL,
  PRIMARY KEY (id)
 );

INSERT INTO ig31_usuarios(nombre,apellidos,dni,nss,edad,rol,usuario,password) VALUES ("admin","administrador","0000","0000",99,1,"admin","admin");

