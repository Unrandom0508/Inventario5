<?php
session_start();
if (!isset($_SESSION['cedula']) || $_SESSION['cedula'] != '1111') { header("Location: index.php"); exit(); }
include "db.php";
?>
<form method="POST">
  Cédula: <input name="cedula" required><br>
  Nombre: <input name="nombre" required><br>
  Contraseña: <input type="password" name="password" required><br>
  <button type="submit" name="guardar">Guardar</button>
</form>

<?php
if (isset($_POST['guardar'])) {
  $ced = $_POST['cedula'];
  $nom = $_POST['nombre'];
  $pass = $_POST['password'];
  $conexion->query("INSERT INTO usuarios (cedula, nombre, password) VALUES('$ced','$nom',MD5('$pass'))");
  header("Location: usuarios.php");
}
?>