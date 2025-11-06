<?php
session_start();
if (!isset($_SESSION['cedula']) || $_SESSION['cedula'] != '1111') {
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Panel de Administración</title>
</head>
<body>
  <h2>Bienvenido, Administrador</h2>
  <a href="usuarios.php"><button>Gestión de Usuarios</button></a>
  <a href="articulos.php"><button>Gestión de Artículos</button></a>
  <a href="logout.php"><button>Cerrar Sesión</button></a>
</body>
</html>
