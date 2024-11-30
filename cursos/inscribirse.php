<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inscribirse a un Curso</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h2>Formulario de Inscripción</h2>
  <form action="inscripciones.php" method="POST">
    <label for="curso">Curso:</label>
    <select name="curso_id" required>
      <?php
      $result = $mysqli->query("SELECT * FROM cursos");
      while ($curso = $result->fetch_assoc()) {
        echo "<option value='{$curso['id']}'>{$curso['nombre']}</option>";
      }
      ?>
    </select>
    <input type="text" name="nombre" placeholder="Tu nombre" required>
    <input type="email" name="email" placeholder="Tu email" required>
    <button type="submit">Inscribirse</button>
  </form>
</body>
</html>