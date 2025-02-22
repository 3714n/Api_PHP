<?php
require_once('includes/Cliente.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'DELETE' && isset($_GET['id_cliente'])) {
    
    Client::delete_client($GET['id_cliente']);
}
?>