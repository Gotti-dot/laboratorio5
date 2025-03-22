<?php
$hostname = "localhost";
$usuario = "root";
$password = "";
$nombreBD = "poo_php";

// Crear conexión
$conn = new mysqli($hostname, $usuario, $password, $nombreBD);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

$sql = "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Juan Ariel', 'Huanca Sosa', 'juan@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Lilia Elisabeth', 'Janco', 'lilia@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Liseth Brisila', 'Quino Arias', 'lis@example.com');";

if ($conn->multi_query($sql) === TRUE) {
    echo "Nuevos registros creados exitosamente";
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
?>