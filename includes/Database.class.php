<?php 
class DataBase {
    private $host = '145.223.77.54';
    private $user = 'u491129587_hotel1';
    private $password = '6u/Sw25jy';
    private $database = 'u491129587_mihotel';
    private $port = '3306'; // Agregamos el puerto explícito

    public function getConnection() {
        $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->database};charset=utf8mb4";

        try {
            $connection = new PDO($dsn, $this->user, $this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            die("❌ ERROR en la conexión: " . $e->getMessage());
        }
    }
}

// Prueba la conexión
$db = new DataBase();
$conn = $db->getConnection();

if ($conn) {
    echo "✅ Conexión exitosa a la base de datos.";
}
?>
