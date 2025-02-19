<!DOCTYPE html>
<html lang="en">
<head>

  <link href="https://fonts.cdnfonts.com/css/diablo" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>;

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Manuel Vidal Resendiz</title>
</head>
<body>
    
<nav class="navbar navbar-light" style="background-color: #28E500 ;">
  <div class="contener">
    <a class="navbar-brand" href="" style="color: rgb(133, 21, 21);">Inicio</a>
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
           <a href="dropdown-item" href="/Victor.html">Practica 1</a><br>
           <a href="dropdown-item" href="/Victor.html">Practica 2</a><br>
           <a href="dropdown-item" href="/Victor.html">Practica 3</a><br>
          </div>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Unidad 2
         </a>
         <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a href="dropdown-item" href="/Victor.html">Practica 4</a><br>
           <a href="dropdown-item" href="/Victor.html">Practica 5</a><br>
           <a href="dropdown-item" href="/Victor.html">Practica 6</a><br>
          </div>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Unidad 3
         </a>
         <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a href="dropdown-item" href="/Victor.html">Practica 7</a><br>
           <a href="dropdown-item" href="/Victor.html">Practica 8</a><br>
           <a href="dropdown-item" href="/Victor.html">Practica 9</a><br>
           <a href="dropdown-item" href="/Victor.html">Practica 10</a><br>
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
$database = "uno_contra_odos";         

$conexion = new mysqli($servername, $username, $pasword,  $database);
if($conexion->connect_error){
  die("Conexion Fallida: " .$conexion->connect_error);
}
$sql = "SELECT * FROM personajes";
$resultado = $conexion->query($sql);
$conexion->query($sql);
if ($resultado->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Id</th><th>Nombre</th><th>Apodo</th><th>Equipo</th><th>Posicion</th><th>Altura</th><th>Peso</th><th>Numero</th><th>Edad</th><th>Nacionalidad</th><th>Puntos</th></tr>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apodo"] . "</
        td><td>" . $row["equipo"] . "</td><td>" . $row["posicion"] . "</td><td>" . $row["altura"] . "</
        td><td>" . $row["peso"] . "</td><td>" . $row["numero"] . "</td><td>" . $row["edad"] . "</
        td><td>" . $row["nacionalidad"] . "</td><td>" . $row["puntos"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros en la base de datos";
}
$conexion->close();


?>

<div class="container">

<h1>Datos de la tabla de personajes</h1>

<?php if($resultado->num_rows >0):?>
 <style>

  h1{

    text-align:center;
    color:#blue;
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
    background-color: blue ;
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
      <th>nombre real</th>
      <th> Nombre del super heroe</th>
      <th>Poderes</th>
      <tr>Debilidades</tr>
    </tr>
    <?php while ($fila = $resultado->fetch_assoc()): ?>
      <tr>
        <td><?php echo $fila["id"]; ?></td>}
        <td><?php echo $fila["Nombre"]; ?></td>
        <td><?php echo $fila["Apellido"]; ?></td>}
        <td><?php echo $fila["Maldiciones"]; ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
  <?php else: ?>
    <p>No se encontraron personajes</p>
    <?php endif; ?>




</body>
</html>