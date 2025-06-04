?php 
  ob_start();
  ?>
<!DOCTYPE html>
<html lang="en">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

      <style>

        h1{
          text-align: center;
          color: royalblue;
          margin-bottom: 20px;
        }
        table{
          width: 100%;
          border-collapse: collapse;
          margin-top: 50px;
          border-radius:50px;
        }
        th, td{
          padding:10px;
          text-align: left;
          border-bottom:1.5px solid pink;
        }
        tr:nth-child(even){
          background-color: crimson;
          color: white;
        }
        tr:nth-child(odd){
          background-color: royalblue;
          color: black;
        }


        </style>
        <style>
          .container1{
            display:flex;
            justify-content:center;
            align-items:center;
            width:50%;
            background-color:#282a36;
            padding: 20px;
            border-radius:10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            color:white;
          }
          h1,h2{
            font-family: 'so this is it', sans-serif;
            text-shadow: 0 1 1 black;
            text-align:center;
            color:#ff79c6;
            margin-bottom: 15px;
          }
          form{
            display:flex;
            flex-direction:column;
          }
          label{
            font-size:16px;
            margin-bottom:5px;
          }
          input[type="text"]{
            padding: 8px;
            margin-bottom:10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background-color: #44475a;
            color:#fff;
          }

          input[type="submit"]{
            padding:10px;
            background-color: #50fa7b;
            border: none;
            color: #282a36;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
          }
          input[type="submit"]:hover{
            background-color: #3ae374;
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
<div class="container1">
    
        </div>

<table class="table table-bordered">
<thead>
    <tr>
        <th>Numero de Control</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Edad</th>
        <th>Colonia</th>
        <th>Especialidad</th>
        <th>Genero</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Fecha de Ingreso</th>
    </tr>
        </thead>
       <?php 
       error_reporting(E_ALL);
       ini_set('display_errors',1);
       

       $username = "root";
       $password = "";
       $servername = "localhost";
       $database = "escuela";

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
    $resultado = $conexion->query($sql);
       
       
        if($resultado->num_rows >0){
          while($row= $resultado->fetch_assoc()){
            echo "<tr>
            <td> {$row['numero_control']}</td>
            <td> {$row['nombre']}</td>
            <td> {$row['apellido_paterno']}</td>
            <td> {$row['apellido_materno']}</td>
            <td> {$row['edad']}</td>
            <td> {$row['nombre_colonias']}</td>
            <td> {$row['nombre_especialidad']}</td>
            <td> {$row['nombre_genero']}</td>
            <td> {$row['correo']}</td>
            <td> {$row['telefono']}</td>
            <td> {$row['fecha_ingreso']}</td>
            
            </tr>";
          }
         }else{
          echo "<p> No hay registros aun.<p>";
           }
           $conexion->close();
            ?>
  </table>

  
</body>
</html>