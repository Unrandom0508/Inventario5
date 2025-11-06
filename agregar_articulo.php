<?php include "db.php"; ?>
<form method="POST">
  Nombre: <input name="nombre"><br>
  Unidades: <input name="unidades" type="number"><br>
  Tipo: 
  <select name="tipo">
    <option>PC</option><option>teclado</option><option>disco duro</option><option>mouse</option>
  </select><br>
  Bodega: 
  <select name="bodega">
    <option>norte</option><option>sur</option><option>oriente</option><option>occidente</option>
  </select><br>
  <button type="submit" name="guardar">Guardar</button>
</form>

<?php
if (isset($_POST['guardar'])) {
  $nombre = $_POST['nombre'];
  $unidades = $_POST['unidades'];
  $tipo = $_POST['tipo'];
  $bodega = $_POST['bodega'];
  $conexion->query("INSERT INTO articulos (nombre, unidades, tipo, bodega)
                    VALUES ('$nombre', '$unidades', '$tipo', '$bodega')");
  header("Location: articulos.php");
}
?>
