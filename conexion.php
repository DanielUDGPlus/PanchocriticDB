<?php
$host = "dpg-d1cvrgp5pdvs73c7k03g-a"; // host de Render
$port = "5432";                       // Puerto por defecto de PostgreSQL
$dbname = "panchocriticdb";            // Nombre de la base que creaste en Render
$user = "pancho";               // Usuario generado por Render
$password = "8lkKmOj5hG40YcOkj4jXYOha32z0B4nR";       // Contraseña generada por Render

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    die();
}
?>
