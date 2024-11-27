CREATE USER IF NOT EXISTS 'usuarioBD'@'%' IDENTIFIED BY 'abc123.';
GRANT ALL ON *.* TO 'usuarioBD'@'%';

CREATE DATABASE IF NOT EXISTS actividad2_3;
USE actividad2_3;
CREATE TABLE IF NOT EXISTS login (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(60) NOT NULL,
    apellido1 VARCHAR(100) NOT NULL,
    apellido2 VARCHAR(100),
    nic VARCHAR(30) NOT NULL UNIQUE,
    email varchar(320) NOT NULL UNIQUE,
    contrasenia char(40) NOT NULL
);

CREATE TABLE IF NOT EXISTS videojuegos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    plataforma VARCHAR(100) NOT NULL,
    anio_lanzamiento INT NOT NULL,
    genero VARCHAR(100)
);
