<?php
include 'conexion.php';

// Obtener los juegos de la tabla "juegos" (no de la vista)
$stmt = $conn->query("SELECT * FROM juegos ORDER BY calificacion DESC");
$juegos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Eliminar Juegos</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <header>
      <div class="menu">
        <a href="index.php">
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
      <h2>Eliminar Juegos</h2>
      <form action="procesar_eliminar.php" method="post">
        <table>
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Género</th>
              <th>Calificación</th>
              <th>Seleccionar</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($juegos as $juego): ?>
              <tr>
                <td><?php echo htmlspecialchars($juego['nombre']); ?></td>
                <td><?php echo htmlspecialchars($juego['genero']); ?></td>
                <td><?php echo $juego['calificacion']; ?></td>
                <td>
                  <input type="checkbox" name="eliminar_ids[]" value="<?php echo $juego['id']; ?>">
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <button type="submit" class="boton-volver" style="margin-top: 20px;">Eliminar seleccionados</button>
      </form>
    </main>
  </div>
</body>
</html>
