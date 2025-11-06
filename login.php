<?php
session_start();
include "db.php";

$cedula = $_POST['cedula'];
$password = $_POST['password'];

$resultado = $conexion->query("SELECT * FROM usuarios WHERE cedula='$cedula' AND password=MD5('$password')");
if ($resultado->num_rows > 0) {
    $_SESSION['cedula'] = $cedula;
    if ($cedula == '1111') {
        header("Location: admin.php");
    } else {
        header("Location: articulos.php");
    }
} else {
    echo "Credenciales incorrectas. <a href='index.php'>Intentar de nuevo</a>";
}
?>
a