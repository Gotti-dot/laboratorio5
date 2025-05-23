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

// Preparar una declaración de inserción
$sql = "INSERT INTO Personas (nombre, apellido, email) VALUES (?, ?, ?)";
if ($stmt = mysqli_prepare($conn, $sql)) {
    // Vincular las variables a la declaración preparada como parámetros
    mysqli_stmt_bind_param($stmt, "sss", $nombre, $apellido, $email);

    // Establecer los valores de los parámetros y ejecutar 
    // la declaración para insertar una fila
    $nombre = "Hermione";
    $apellido = "Granger";
    $email = "hermionegranger@gmail.com";
    mysqli_stmt_execute($stmt);

    // Establecer valores de los parámetros y ejecutar 
    // la declaración para insertar una fila
    $nombre = "Ron";
    $apellido = "Weasley";
    $email = "ronweasley@gmail.com";
    mysqli_stmt_execute($stmt);

    echo "Registros insertados con éxito.";
} else {
    echo "ERROR: no se pudo preparar la consulta: $sql" . mysqli_error($conn);
}

// Declaración cerrada
mysqli_stmt_close($stmt);

// Conexión cerrada
mysqli_close($conn);
?>