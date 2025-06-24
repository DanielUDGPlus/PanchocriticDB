<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Juego - Panchocritic</title>
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
      <section class="juegos-container detalle-juego">
        <div class="juego-card">
          <h2>Agregar nuevo juego</h2>
          <form action="procesar_agregar.php" method="post">
            <label>Nombre:</label><br>
            <input type="text" name="nombre" required><br><br>

            <label>Género:</label><br>
            <input type="text" name="genero" required><br><br>

            <label>Calificación:</label><br>
            <input type="number" name="calificacion" min="0" max="100" required><br><br>

            <label>Fecha de lanzamiento:</label><br>
            <input type="date" name="fecha_lanzamiento" required><br><br>

            <label>Descripción:</label><br>
            <textarea name="descripcion" rows="5" required></textarea><br><br>

            <button type="submit" class="boton-volver">Guardar juego</button>
          </form>
        </div>
      </section>
    </main>
  </div>
</body>
</html>
