<?php
session_start();
if (!isset($_SESSION['cedula'])) { header("Location: index.php"); exit(); }
include "db.php";

$id = $_GET['id'];
$conexion->query("DELETE FROM articulos WHERE id=$id");
header("Location: articulos.php");
?>