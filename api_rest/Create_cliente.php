<?php 
require_once('includes/Cliente.class.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre_cliente = $_POST['nombre_cliente'];
        $apellido_cliente = $_POST['apellido_cliente'];
        $tipo_id_cliente = $_POST['tipo_id_cliente'];
        $numero_id_cliente = $_POST['numero_id_cliente'];
        $telefono_cliente = $_POST['telefono_cliente'];
        $correo_cliente = $_POST['correo_cliente'];
        $nacionalidad_cliente = $_POST['nacionalidad_cliente'];
        $profesion_cliente = $_POST['profesion_cliente'];

        Client::create_client($nombre_cliente, $apellido_cliente, $tipo_id_cliente, $numero_id_cliente, $telefono_cliente, $correo_cliente, $nacionalidad_cliente, $profesion_cliente);
    }
?>