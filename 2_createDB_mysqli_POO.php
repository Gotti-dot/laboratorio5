<?php
$hostname = "localhost";
$usuario = "root";
$password = "";

// Crear conexión
$conn = new mysqli($hostname, $usuario, $password);

// Verifica la conexión
if($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}
// echo "Conectado exitosamente con POO";

// Crear Base de Datos
$sql = "CREATE DATABASE poo_php";

if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada con éxito";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}
$conn->close();
?>