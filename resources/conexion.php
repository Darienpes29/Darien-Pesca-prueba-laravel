<?php 

$localhost = "localhost:3306";
$user = "root";
$password = "1234";
$database = "market";

try {
    $conexion = new PDO("mysql:host=$localhost;dbname=$database", $user, $password);
    echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}

?>