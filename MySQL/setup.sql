DROP DATABASE if exists code_polls;

CREATE DATABASE IF NOT EXISTS code_polls DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
USE code_pills;
CREATE TABLE IF NOT EXISTS clientes{
    id INT AUTO_INCREMENT,
    nombre_cliente VARCHAR(255) NOT NULL,
    apellido_cliente VARCHAR(255) NOT NULL,
    tipo_id_cliente VARCHAR(255) NOT NULL,
    numero_id_cliente VARCHAR(255) NOT NULL,
    telefono_cliente VARCHAR(255) NOT NULL,
    correo_cliente VARCHAR(255) NOT NULL,
    profesion_cliente VARCHAR(255) NOT NULL,
    nacionalidad_cliente VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
} ENGINE=INNDDB;
