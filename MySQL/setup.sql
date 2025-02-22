DROP DATABASE if exists u491129587_mihotel;

CREATE DATABASE IF NOT EXISTS u491129587_mihotel DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
USE u491129587_mihotel;
CREATE TABLE IF NOT EXISTS cliente(
    id INT AUTO_INCREMENT,
    nombre_cliente VARCHAR(255) NOT NULL,
    apellido_cliente VARCHAR(255) NOT NULL,
    tipo_id_cliente VARCHAR(50) NOT NULL,
    numero_id_cliente VARCHAR(50) NOT NULL,
    telefono_cliente VARCHAR(50) NOT NULL,
    correo_cliente VARCHAR(50) NOT NULL,
    profesion_cliente VARCHAR(100) NOT NULL,
    nacionalidad_cliente VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
 ) ENGINE=InnoDB;
