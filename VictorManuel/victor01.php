<?php 
  ob_start();
  ?>
<!DOCTYPE html>
<html lang="en">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

        <style>
    /* Estilos generales */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    h1 {
      color: #333;
      text-align: center;
      margin-bottom: 30px;
    }

    /* Estilo del formulario */
    #formulario {
      background-color: cyan;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #555;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: black;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    /* Estilos para mensajes de éxito y error */
    .success {
      color: green;
      font-weight: bold;
      text-align: center;
    }

    .error {
      color: red;
      font-weight: bold;
      text-align: center;
    }

    table{
                            width:100%;
                            border-collapse: collapse;
                            margin-top: 50px;
                            border-radius: 50px;
                        }
                        th, td{
                            padding: 10px;
                            text-align:left;
                            border-bottom: 1px solid #ddd;
                        }
                        tr:nth-child(even){
                            background-color: white;
                            color: black;
                        }
                        tr:nth-child(odd){
                            background-color: #ffe4ec;
                            color: black;
                        }
                        th{
                            background-color: crimson; <!-- ese es el color de antes 84c047-->
                            color: white;
                        }
  </style>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reyes Meza Bruno Eduardo</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color:#36a7bb;">
    <div class="contener">
        <a class="navbar-brand" href="" style="color: rgb(202, 76, 76);">Inicio</a>
        <!-- Un boton de inicio que lleva a si mismo, de color blanco, aqui pueden poner el color que quieran dependiendo de su estilo -->
       
        <!-- A continuacion es el menu dropdown para poner las ligas a las practicas -->
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="nav navbar-nav">
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Unidad 1
             </a>
             <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a href="dropdown-item" href="/reyesmezabrunoeduardo/Bruno1.php">Practica 1</a><br>
               <a href="dropdown-item" href="/reyesmezabrunoeduardo/Bruno2.php">Practica 2</a><br>
               <a href="dropdown-item" href="/reyesmezabrunoeduardo/Bruno3.php">Practica 3</a><br>
              </div>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Unidad 2
             </a>
             <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a href="dropdown-item" href="/reyesmezabrunoeduardo/Bruno4.php">Practica 4</a><br>
               <a href="dropdown-item" href="/reyesmezabrunoeduardo/Bruno5.php">Practica 5</a><br>
               <a href="dropdown-item" href="/reyesmezabrunoeduardo/Bruno5a.php">Practica 5a</a><br>
               <a href="dropdown-item" href="/reyesmezabrunoeduardo/Bruno5b.php">Practica 5b</a><br>
               <a href="dropdown-item" href="/reyesmezabrunoeduardo/Eduardo1.php">Practica secundaria</a><br>
               <a href="dropdown-item" href="/reyesmezabrunoeduardo/Bruno6.php">Practica 6</a><br>
              </div>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Unidad 3
             </a>
             <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a href="dropdown-item" href="/reyesmezabrunoeduardo/Bruno7.php">Practica 7</a><br>
               <a href="dropdown-item" href="/reyesmezabrunoeduardo/Bruno8.php">Practica 8</a><br>
               <a href="dropdown-item" href="/reyesmezabrunoeduardo/Bruno9.php">Practica 9</a><br>
               <a href="dropdown-item" href="/reyesmezabrunoeduardo/Bruno10.php">Practica 10</a><br>
              </div>
           </li>
         </ul>
         </div>
       </div>
       </nav>
       <div class="jumbotron">
        
       <h1>PAGINA DE MOSTRAR DATOS RELACIONADOS</h1>

       <div class="container1" style="display:flex; max-width:600px; margin:auto;">
        <form method="POST" id="formulario">
            <label for="numero_control">Número de control</label>
            <input type="text" id="numero_control" name="numero_control" required><br>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="apellido_paterno">Apellido paterno</label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" required><br>
            <label for="apellido_materno">Apellido materno</label>
            <input type="text" id="apellido_materno" name="apellido_materno" required><br>
            <label for="id_edad">Edad</label>
            <select name="id_edad" required>
                <option value="">Seleccione una edad</option>
                <?php while ($row = $result_edad->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["edad"] . "</option>";
                } ?>
            </select>
            <label for="id_colonia">Colonia</label>
            <select name="id_colonia" required>
                <option value="">Seleccione una colonia</option>
                <?php while ($row = $result_colonias->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nombre_colonias"] . "</option>";
                } ?>
            </select>
            <label for="id_especialidad">Especialidad</label>
            <select name="id_especialidad" required>
                <option value="">Seleccione una especialidad</option>
                <?php while ($row = $result_especialidades->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nombre_especialidad"] . "</option>";
                } ?>
            </select>
            <label for="id_genero">Género</label>
            <select name="id_genero" required>
                <option value="">Seleccione un género</option>
                <?php while ($row = $result_generos->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nombre_genero"] . "</option>";
                } ?>
            </select>
            <label for="correo">Correo</label>
            <input type="text" id="correo" name="correo" required><br>
            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" required><br>
            <label for="fecha_ingreso">Fecha de ingreso</label>
            <input type="date" id="fecha_ingreso" name="fecha_ingreso" required><br>
            <input type="submit" value="Agregar registro">
        </form>
    </div>

       <?php 
       error_reporting(E_ALL);
       ini_set('display_errors',1);
       

       $username = "root";
       $password = "";
       $servername = "localhost";
       $database = "mega_evoluciones";

       $conexion = new mysqli($servername, $username, $password, $database);
       if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    //LAS QUE TIENEN LA LETRA "a" PERTENECEN A LA TABLA PRINCIPAL LLAMADA "alumnos"
    //LAS DEMAS LETRAS SON DE ESAS TALAS, COMO "e" de edades, la de "c" de colonias
    $sql = "SELECT

    a.numero_control,
    a.nombre,
    a.apellido_paterno,
    a.apellido_materno,
    e.edad,
    c.nombre_colonias,
    es.nombre_especialidad,
    g.nombre_genero,
    a.correo,
    a.telefono,
    a.fecha_ingreso 
    FROM alumnos a
    JOIN edades e ON a.id_edad = e.id
    JOIN colonias c ON a.id_colonia = c.id
    JOIN especialidades es ON a.id_especialidad = es.id
    JOIN generos g ON a.id_genero = g.id";
    // edades, colonias, especialidades, generos es el nombre de la tabla, lo de id_edad, colonia, especialidad, genero, es el nombre de la columna
    $resultado = $conexion->query($sql);

    function insertarAlumno($conexion)
    {
     if($_SERVER ["REQUEST_METHOD"]=="POST"){
      var_dump($_POST);
      $numero_control = $conexion->real_escape_string($_POST["numero_control"]);
      $nombre = $conexion->real_escape_string($_POST["nombre"]);
      $apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
      $apellido_materno = $conexion->real_escape_string($_POST["apellido_materno"]);
      $id_edad = $conexion->real_escape_string($_POST["id_edad"]);
      $id_colonia = $conexion->real_escape_string($_POST["id_colonia"]);
      $id_especialidad = $conexion->real_escape_string($_POST["id_especialidad"]);
      $id_genero = $conexion->real_escape_string($_POST["id_genero"]);
      $correo = $conexion->real_escape_string($_POST["correo"]);
      $telefono = $conexion->real_escape_string($_POST["telefono"]);
      $fecha_ingreso = $conexion->real_escape_string($_POST["fecha_ingreso"]);

      $sql= "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, id_edad, id_colonia, id_especialidad, id_genero, correo, telefono, fecha_ingreso)
      VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$id_edad', '$id_colonia', '$id_especialidad', '$id_genero', '$correo', '$telefono', '$fecha_ingreso')";
    if ($conexion->query($sql)===TRUE){
      echo "<p class succes'>Nuevo alumno agregado con exito.</p>";
      header("Location: ". $_SERVER['PHP_SELF']);
      exit();
    } else{
      echo"<p class= 'error'>Error al agregar al alumno: " . $conexion->error . "</p>";
    }
    }
    }

    insertarAlumno($conexion);
    $sql = "SELECT * FROM alumnos";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
      echo "<table class='table table-bordered'>";
      echo "<tr>
              <th>Numero de control</th>
              <th>Nombre</th>
              <th>Apellido paterno</th>
              <th>Apellido materno</th>
              <th>Edad</th>
              <th>Colonia</th>
              <th>Especialidad</th>
              <th>Genero</th>
              <th>Correo</th>
              <th>Telefono</th>
              <th>Fecha de ingreso</th>
            </tr>";
      while ($row = $resultado->fetch_assoc()) {
          echo "<tr>
                  <td>" . $row["numero_control"] . "</td>
                  <td>" . $row["nombre"] . "</td>
                  <td>" . $row["apellido_paterno"] . "</td>
                  <td>" . $row["apellido_materno"] . "</td>
                  <td>" . $row["id_edad"] . "</td>
                  <td>" . $row["id_colonia"] . "</td>
                  <td>" . $row["id_especialidad"] . "</td>
                  <td>" . $row["id_genero"] . "</td>
                  <td>" . $row["correo"] . "</td>
                  <td>" . $row["telefono"] . "</td>
                  <td>" . $row["fecha_ingreso"] . "</td>
                </tr>";
      }
      echo "</table>";
  }
             $conexion->close();
              ?>
</body>
</html>