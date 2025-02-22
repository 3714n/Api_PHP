<?php
    require_once('Database.class.php');

    class Client{
        public static function create_client($nombre_cliente, $apellido_cliente, $tipo_id_cliente,
        $numero_id_cliente, $telefono_cliente, $correo_cliente, $nacionalidad_cliente, $profesion_cliente){
        $database = new DataBase();
        $conn = $database->getConnection();

        $stnt = $conn->prepare('INSERT INTO cliente (nombre_cliente,apellido_cliente,tipo_id_cliente,
        numero_id_cliente,telefono_cliente,correo_cliente,nacionalidad_cliente,profesion_cliente)
        VALUES(:nombre_cliente,:apellido_cliente,:tipo_id_cliente,:numero_id_cliente,:telefono_cliente,
        :correo_cliente,:nacionalidad_cliente,:profesion_cliente)');
        $stnt->bindParam(':nombre_cliente', $nombre_cliente);
        $stnt->bindParam(':apellido_cliente', $apellido_cliente);
        $stnt->bindParam(':tipo_id_cliente', $tipo_id_cliente);
        $stnt->bindParam(':numero_id_cliente', $numero_id_cliente);
        $stnt->bindParam(':telefono_cliente', $telefono_cliente);
        $stnt->bindParam(':correo_cliente', $correo_cliente);
        $stnt->bindParam(':nacionalidad_cliente', $nacionalidad_cliente);
        $stnt->bindParam(':profesion_cliente', $profesion_cliente);
        if($stnt->execute()){
            header('HTTP/1.1 201 Created');
        }else{
            header('HTTP/1.1 500 Internal Server Error');
        }
        }
        public static function delete_client($id_cliente){
            $database = new DataBase();
            $conn = $database->getConnection();
            $stnt = $conn->prepare('DELETE FROM cliente WHERE id_cliente = :id_cliente');
            $stnt->bindParam(':id_cliente', $id_cliente);
            if($stnt->execute()){
                header('HTTP/1.1 200 OK');
            }else{
                header('HTTP/1.1 500 Internal Server Error');
            }
        }
    };
?>