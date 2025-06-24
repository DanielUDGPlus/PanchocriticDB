<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $stmt = $conn->prepare("INSERT INTO juegos (nombre, genero, calificacion, fecha_lanzamiento, descripcion)
                          VALUES (:nombre, :genero, :calificacion, :fecha_lanzamiento, :descripcion)");

  $stmt->execute([
    'nombre' => $_POST['nombre'],
    'genero' => $_POST['genero'],
    'calificacion' => $_POST['calificacion'],
    'fecha_lanzamiento' => $_POST['fecha_lanzamiento'],
    'descripcion' => $_POST['descripcion']
  ]);

  header("Location: juegos.php");
  exit;
}
?>
