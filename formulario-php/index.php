<!DOCTYPE html>
<html>
<head>
  <title>Formulario</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
    }

    form {
      width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 4px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #333;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="number"],
    select {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      margin-bottom: 20px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h1>Formulario</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required>

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required>

    <label for="pais">País:</label>
    <select id="pais" name="pais" required>
      <option value="">Seleccione un país</option>
      <option value="Argentina">Argentina</option>
      <option value="Brasil">Brasil</option>
      <option value="Chile">Chile</option>
      <option value="México">México</option>
      <option value="España">España</option>
      <option value="Otros">Otros</option>
    </select>

    <input type="submit" name="submit" value="Enviar">
  </form>

  <?php
  // Comprobamos si se ha enviado el formulario
  if (isset($_POST['submit'])) {
    // Obtenemos los datos enviados
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $edad = $_POST['edad'];
    $pais = $_POST['pais'];

    // Mostramos los datos
    echo "<h2>Datos ingresados:</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellido:</strong> $apellido</p>";
    echo "<p><strong>Correo electrónico:</strong> $correo</p>";
    echo "<p><strong>Contraseña:</strong> $contrasena</p>";
    echo "<p><strong>Edad:</strong> $edad</p>";
    echo "<p><strong>País:</strong> $pais</p>";
  }
  ?>
</body>
</html>
