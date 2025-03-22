<?php
$hostname = "localhost";
$usuario = "root";
$password = "";
$nombreBD = "procedimiento_php";

// Crear conexión
$conn = mysqli_connect($hostname, $usuario, $password, $nombreBD);

// Verificar la conexión
if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}

$sql = "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Juan Ariel', 'Huanca Sosa', 'juan@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Lilia Elisabeth', 'Janco', 'lilia@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Liseth Brisila', 'Quino Arias', 'lis@example.com');";

if (mysqli_multi_query($conn, $sql)) {
    echo "Nuevos registros creados exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>