<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $genero = $_POST['genero'];
  $calificacion = $_POST['calificacion'];
  $fecha_lanzamiento = $_POST['fecha_lanzamiento'];
  $descripcion = $_POST['descripcion'];

  $stmt = $conn->prepare("UPDATE juegos SET nombre = :nombre, genero = :genero, calificacion = :calificacion, fecha_lanzamiento = :fecha, descripcion = :descripcion WHERE id = :id");
  $stmt->execute([
    'nombre' => $nombre,
    'genero' => $genero,
    'calificacion' => $calificacion,
    'fecha' => $fecha_lanzamiento,
    'descripcion' => $descripcion,
    'id' => $id
  ]);

  header("Location: editar.php");
  exit;
}
?>
