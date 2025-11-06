<?php
$conexion = new mysqli("mysql-flaw.alwaysdata.net", "flaw", "Misifu123+", "flaw_inventario");
if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}
?>
