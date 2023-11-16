CREATE DATABASE Lab1;
use Lab1;
-- create table for People
CREATE TABLE Persona (
    ID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Apellido VARCHAR(50),
    NumeroIdentificacion VARCHAR(20),
    Direccion VARCHAR(100),
    Telefono VARCHAR(20)
);

-- insert data 
INSERT INTO Persona VALUES (1, 'Angel', 'Patiño', '1234567899', 'Santo Domingo - Ecuador', '0999444422');

select * from Personapersona

-- create user for practique, and grant Privileges
CREATE USER 'anyel'@'localhost' IDENTIFIED BY 'anyel';
GRANT ALL PRIVILEGES ON lab1.* TO 'anyel'@'localhost';
FLUSH PRIVILEGES;
