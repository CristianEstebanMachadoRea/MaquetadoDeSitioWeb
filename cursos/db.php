<?php
$mysqli = new mysqli("localhost", "root", "", "cursos_curso");
if ($mysqli->connect_error) {
  die("Error de conexión: " . $mysqli->connect_error);
}
?>