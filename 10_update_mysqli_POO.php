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

// SQL para actualizar un registro
$sql = "UPDATE Personas SET apellido = 'Doe' WHERE id = 2";

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado con éxito";
} else {
    echo "Error al actualizar registro: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>