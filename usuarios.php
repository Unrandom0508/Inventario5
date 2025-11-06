<?php
session_start();
if (!isset($_SESSION['cedula']) || $_SESSION['cedula'] != '1111') { header("Location: index.php"); exit(); }
include "db.php";
$usuarios = $conexion->query("SELECT * FROM usuarios");
?>
<!DOCTYPE html>
<html>
<head><title>Gestión de Usuarios</title></head>
<body>
  <h2>Gestión de Usuarios</h2>
  <a href="agregar_usuario.php">Agregar usuario</a> | 
  <a href="admin.php">Volver</a>
  <table border="1">
    <tr><th>Cédula</th><th>Nombre</th><th>Acciones</th></tr>
    <?php while($u = $usuarios->fetch_assoc()): ?>
      <tr>
        <td><?= $u['cedula'] ?></td>
        <td><?= $u['nombre'] ?></td>
        <td><a href="editar_usuario.php?cedula=<?= $u['cedula'] ?>">Editar</a></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
