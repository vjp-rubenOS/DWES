-- Exportación de la base de datos Agenda
CREATE DATABASE Agenda;
USE Agenda;

CREATE TABLE Contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    fecha_alta DATETIME DEFAULT CURRENT_TIMESTAMP
);
