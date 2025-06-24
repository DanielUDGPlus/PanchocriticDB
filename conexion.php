<?php
$host = "dpg-d1cvrgp5pdvs73c7k03g-a.oregon-postgres.render.com";
$port = "5432";
$dbname = "panchocriticdb";
$user = "pancho";
$password = "8lkKmOj5hG40YcOkj4jXYOha32z0B4nR";

try {
    // Opcional: Si usas PDO y tu servidor lo soporta, añade sslmode=require en la cadena de conexión:
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    die();
}
?>
