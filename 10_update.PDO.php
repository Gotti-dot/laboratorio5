<?php
$hostname = "localhost";
$usuario = "root";
$password = "";
$nombreBD = "pdo_php";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$nombreBD", $usuario, $password);
    // Establecer el modo de error PDO en excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE Personas SET apellido = 'Doe' WHERE id = 2";

    // Preparar declaración
    $stmt = $conn->prepare($sql);

    // Ejecutar la consulta
    $stmt->execute();

    // Mostrar la cantidad de registros actualizados
    echo $stmt->rowCount() . " registros ACTUALIZADOS exitosamente";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>