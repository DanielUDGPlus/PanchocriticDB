<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Juegos</title>
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
      <h2>Editar Juegos</h2>
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Género</th>
            <th>Calificación</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $stmt = $conn->query("SELECT * FROM juegos ORDER BY calificacion DESC");
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              echo "<tr>
                      <td><a href='editar_juego.php?id={$row['id']}'>" . htmlspecialchars($row['nombre']) . "</a></td>
                      <td>" . htmlspecialchars($row['genero']) . "</td>
                      <td>{$row['calificacion']}</td>
                    </tr>";
          }
          ?>
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>
