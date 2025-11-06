<?php
session_start();
if (!isset($_SESSION['cedula'])) { header("Location: index.php"); exit(); }
include "db.php";
$articulos = $conexion->query("SELECT * FROM articulos");
?>
<!DOCTYPE html>
<html>
<head><title>Gestión de Artículos</title></head>
<body>
  <h2>Gestión de Artículos</h2>
  <a href="agregar_articulo.php">Agregar artículo</a> | 
  <a href="logout.php">Cerrar sesión</a>
  <table border="1">
    <tr><th>ID</th><th>Nombre</th><th>Unidades</th><th>Tipo</th><th>Bodega</th><th>Acciones</th></tr>
    <?php while($a = $articulos->fetch_assoc()): ?>
      <tr>
        <td><?= $a['id'] ?></td>
        <td><?= $a['nombre'] ?></td>
        <td><?= $a['unidades'] ?></td>
        <td><?= $a['tipo'] ?></td>
        <td><?= $a['bodega'] ?></td>
        <td>
          <a href="editar_articulo.php?id=<?= $a['id'] ?>">Editar</a> | 
          <a href="eliminar_articulo.php?id=<?= $a['id'] ?>">Eliminar</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
a