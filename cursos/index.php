<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sistema de Inscripción</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Bienvenido al Sistema de Inscripción</h1>
  <a href="inscribirse.php">Inscribirse a un Curso</a>

  <h2>Estudiantes Inscritos</h2>

  <div class="estudiantes-lista">
    <?php
    
    $sql = "SELECT e.nombre_estudiante, e.email, c.nombre AS curso
            FROM inscripciones e
            INNER JOIN cursos c ON e.curso_id = c.id
            ORDER BY e.fecha_inscripcion DESC";
    $result = $mysqli->query($sql);

    
    while ($estudiante = $result->fetch_assoc()) {
        echo "<div class='estudiante'>";
        echo "<h3>" . htmlspecialchars($estudiante['nombre_estudiante']) . "</h3>";
        echo "<p><strong>Correo:</strong> " . htmlspecialchars($estudiante['email']) . "</p>";
        echo "<p><strong>Curso:</strong> " . htmlspecialchars($estudiante['curso']) . "</p>";
        echo "</div>";
    }

    $mysqli->close();
    ?>
  </div>
</body>
</html>
