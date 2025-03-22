<?php
$hostname = "localhost";
$usuario = "root";
$password = "";

// Crear conexión
$conn = mysqli_connect($hostname, $usuario, $password);

// Verificar la conexión
if(!$conn){
    die("La conexión falló: ".mysqli_connect_error());
}
echo "Conectado exitosamente con Procedimiento";
?>