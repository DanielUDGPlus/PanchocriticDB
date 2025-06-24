<?php
$host = "localhost";      // O el hostname de Railway/Render
$port = "5432";           // Puerto de PostgreSQL
$dbname = "Panchocritic"; // Nombre de tu base de datos
$user = "postgres";     // Cambia por el usuario real
$password = "6754"; // Cambia por la contraseña real

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    die();
}
?>
