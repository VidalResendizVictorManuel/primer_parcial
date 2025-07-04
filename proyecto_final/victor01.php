<!DOCTYPE html>
<html lang="en">
<head>

  <link href="https://fonts.cdnfonts.com/css/diablo" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Manuel Vidal Resendiz</title>
</head>
<body>
    
<nav class="navbar navbar-light" style="background-color: rgb(22, 27, 21);">
  <div class="contener">
    <a class="navbar-brand" href="index.html" style="color: rgb(221, 159, 159);">Inicio</a>
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
           <a class="dropdown-item" href="victor01.php">Mosrtrar Datos 1</a><br>
           <a class="dropdown-item" href="victor02.php">Mosrtrar Datos 2</a><br>
           <a class="dropdown-item" href="victor03.php">Meter Datos 3</a><br>
          </div>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Unidad 2
         </a>
         <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="victor04.php">Mosrtrar Datos 1</a><br>
           <a class="dropdown-item" href="victor05.php">Mosrtrar Datos 2</a><br>
           <a class="dropdown-item" href="victor06.html">Meter Datos 3</a><br> 
          </div>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Unidad 3
         </a>
         <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="victor07.html">Mosrtrar Datos 1</a><br>
           <a class="dropdown-item" href="victor08.html">Mosrtrar Datos 2</a><br>
           <a class="dropdown-item" href="victor09.html">Meter Datos 3</a><br>
          </div>
       </li>
     </ul>
     </div>
   </div>
  </nav>

<?php

$username = "root";
$pasword = "";
$servername = "localhost";
$database = "pokemon";         

$conexion = new mysqli($servername, $username, $pasword,  $database);
if($conexion->connect_error){
  die("Conexion Fallida: " .$conexion->connect_error);
}
$sql = "SELECT * FROM siniestro";
$resultado = $conexion->query($sql);

?>

<div class="container">
<h1>Datos de la tabla de personajes</h1>

<?php if($resultado->num_rows >0):?>
 <style>

  h1{

    text-align:center;
    color:# rgb(22, 27, 21);
    margin: bottom: 20px;
  }
  table{
    width : 100% ;
    border-collapse: collapse;
    margin-top: 50px;
    border-radius:50px;
  }
  th, td {
    padding:10px;
    text-align:left;
    border-bottom: 1px solid #ddd;
  }
  tr:nth-child(even){
    background-color: rgb(69, 139, 168);
    color: black ;  
  }
  tr:nth-child(odd){
    background-color:white;
    color:black;
  }
  th{
    background-color:#ff3eff;
    color:white;
  }
  

 </style>

  <table>
    <tr>
      <th>id</th>
      <th>Pokemon</th>
      <th> Evoluciones</th>
      <th>Tipo</th>
      <th>Debilidades</th>
      <th>Efectivo</th>
    </tr>

    <?php while ($fila = $resultado->fetch_assoc()): ?>
      <tr>
        <td><?php echo $fila["id"]; ?></td>
        <td><?php echo $fila["Pokemon"]; ?></td>
        <td><?php echo $fila["Evoluciones"]; ?></td>
        <td><?php echo $fila["Tipo"]; ?></td>
        <td><?php echo $fila["Debilidades"]; ?></td>
        <td><?php echo $fila["Efectivo"]; ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
  <?php else: ?>
    <p>No se encontraron personajes</p>
    <?php endif; ?>




</body>
</html>