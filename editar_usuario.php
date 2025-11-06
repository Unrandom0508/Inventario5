<?php
session_start();
if (!isset($_SESSION['cedula']) || $_SESSION['cedula'] != '1111') { header("Location: index.php"); exit(); }
include "db.php";

$ced = $_GET['cedula'];
$resultado = $conexion->query("SELECT * FROM usuarios WHERE cedula='$ced'");
$u = $resultado->fetch_assoc();
?>
<form method="POST">
  Cédula: <input value="<?= $u['cedula'] ?>" disabled><br>
  Nombre: <input name="nombre" value="<?= $u['nombre'] ?>"><br>
  Nueva contraseña: <input type="password" name="password"><br>
  <button type="submit" name="actualizar">Actualizar</button>
</form>

<?php
if (isset($_POST['actualizar'])) {
  $nom = $_POST['nombre'];
  $pass = $_POST['password'];
  if ($pass != "") {
    $conexion->query("UPDATE usuarios SET nombre='$nom', password=MD5('$pass') WHERE cedula='$ced'");
  } else {
    $conexion->query("UPDATE usuarios SET nombre='$nom' WHERE cedula='$ced'");
  }
  header("Location: usuarios.php");
}
?>