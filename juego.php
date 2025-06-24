<?php
include 'conexion.php';

if (!isset($_GET['id'])) {
  echo "ID no proporcionado.";
  exit;
}

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM juego_detalle WHERE id = :id");
$stmt->execute(['id' => $id]);
$juego = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$juego) {
  echo "Juego no encontrado.";
  exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($juego['nombre']); ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <header>
      <div class="menu">
        <a href="index.html">
          <img src="logo.png" alt="Logo del sitio" id="logo">
        </a>
        <nav class="menu-links">
          <ul>
            <li><a href="index.html#juegos">Juegos</a></li>
            <li><a href="juegos.php">Ranking</a></li>
            <li><a href="agregar.php">Agregar</a></li>
            <li><a href="eliminar.php">Eliminar</a></li>
            <li><a href="editar.php">Editar</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <section class="juegos-container detalle-juego">
        <div class="juego-card">
          <h2><?php echo htmlspecialchars($juego['nombre']); ?></h2>

          <img src="logos-xbox-playstation.jpg" alt="Imagen genérica del juego">

          <p><strong>Ranking:</strong> <?php echo $juego['ranking']; ?></p>
          <p><strong>Género:</strong> <?php echo htmlspecialchars($juego['genero']); ?></p>
          <p><strong>Calificación:</strong> <?php echo $juego['calificacion']; ?></p>
          <p><strong>Fecha de lanzamiento:</strong> <?php echo $juego['fecha_lanzamiento']; ?></p>
          <p><strong>Descripción:</strong> <?php echo htmlspecialchars($juego['descripcion']); ?></p>

          <a href="juegos.php" class="boton-volver">← Volver al ranking</a>
        </div>
      </section>
    </main>
  </div>
</body>
</html>
