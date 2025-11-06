<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login - Inventario</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <h2>Iniciar Sesión</h2>
  <form action="login.php" method="POST">
    <label>Cédula:</label>
    <input type="text" name="cedula" required><br>
    <label>Contraseña:</label>
    <input type="password" name="password" required><br>
    <button type="submit">Entrar</button>
  </form>
</body>
</html>
