<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link href="https://fonts.cdnfonts.com/css/vazirmatn" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/noto-sans-devanagari" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/unbounded" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <title>Arturo Jerez Hdz Index</title>
</head>
<body>
    <div class="Contenedor-del-contenedor" style="height: 95vh; width: 186vh;">
        <div class="contener" style="font-family: 'Unbounded', sans-serif; background-color: #846a6a;">
          <a class="navbar-brand" href="" style="color: #eef0f2; font-size: 21px;">Inicio</a>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav navbar-nav" style="font-family: 'Vazirmatn', sans-serif; background-color: none; font-size: 18px;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">Unidad 1</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/Arturo.html">Practica 1</a>
                        <a class="dropdown-item" href="/Arturo1.html">Practica 2</a>
                        <a class="dropdown-item" href="/index.html">Practica 3</a>
                     </div>
                </li>
            </ul>
           </div>
        </div>
    
        <div class="jumbotron" style="text-align: center; background-color: #eef0f2;">
            <h1 class="display-4" style="color: #a99985; font-weight: 700; font-family: 'Noto Sans Devanagari', sans-serif;">Cuarto Semestre</h1>
        </div>
        <div class="container1">

    <h1>Ingresa los datos</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="formulario">
      <label for="pokemones">$pokemones:</label>
      <input type="text" id="pokemones" name="pokemones" required><br>
      <label for="evoluciones">evoluciones:</label>
      <input type="text" id="evoluciones" name="evoluciones" required><br>
      <label for="tipo">tipo:</label>
      <input type="text" id="tipo" name="tipo" required><br>
      <label for="debilidades">debilidades:</label>
      <input type="text" id="debilidades" name="debilidades" required><br>

      <input type="submit" value="Agregar registro">
    </form>



    <?php
    $username = "root";
    $password = "";
    $servername = "localhost"; 
    $database = "pokemon";

    $conexion = new mysqli($servername, $username, $password, $database);
    if ($conexion->connect_error) {
      die("La conexion fallo: " . $conexion->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
      $Nombre = $_POST["pokemones"];
      $Apellido = $_POST["evoluciones"]; 
      $Posición = $_POST["tipo"];
      $Numero = $_POST["debilidades"];
      
      $sql = "INSERT INTO agua (pokemones, evoluciones, tipo, debilidades) VALUES ('$pokemones', '$evoluciones', '$tipo', '$debilidades')";
      
      if ($conexion->query($sql) == TRUE) {
        echo "<p class='success'>Nuevo jugador agregado con éxito.</p>";
      } else {
        echo "<p class='error'>Error al agregar al Jugador:</p>" . $conexion->error . "<p>";
      }
    }

    ?>
  </div>