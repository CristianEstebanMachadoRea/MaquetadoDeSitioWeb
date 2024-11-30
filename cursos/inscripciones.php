<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $curso_id = $_POST['curso_id'];
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];

  
  $stmt = $mysqli->prepare("INSERT INTO inscripciones (curso_id, nombre_estudiante, email) VALUES (?, ?, ?)");
  $stmt->bind_param("iss", $curso_id, $nombre, $email);
  $stmt->execute();
  $stmt->close();

  
  header("Location: index.php"); 
  exit();
}
?>
