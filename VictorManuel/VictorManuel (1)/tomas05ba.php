<?php
error_reporting(E_ALL);
ini_set('display_errors',1);


$username = "root";
$password = "";
$servername = "localhost";
$database = "mega_evolucion";

$conexion = new mysqli($servername, $username, $password, $database);
if ($conexion->connect_error) {
 die("Conexión fallida: " . $conexion->connect_error);
}

//Obtener los datos del dropdown
$sql_edad = "SELECT id, edad FROM edades";
$sql_colonias = "SELECT id, nombre_colonias FROM colonias";
$sql_especialidades = "SELECT id, nombre_especialidad FROM especialidades";
$sql_generos = "SELECT id, nombre_genero FROM generos";
$result_edad = $conexion->query($sql_edad);
$result_colonias = $conexion->query($sql_colonias);
$result_especialidades = $conexion->query($sql_especialidades);
$result_generos = $conexion->query($sql_generos);

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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Manuel Vidal Resendiz</title>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: rgb(22, 27, 21);">
  <div class="contener">
    <a class="navbar-brand" href="" style="color: rgb(221, 159, 159);">Inicio</a>
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
           <a class="dropdown-item" href="/VictorManuel/HOLA.php">Mosrtrar Datos 1</a><br>
           <a class="dropdown-item" href="/VictorManuel/HOLA.2.php">Mosrtrar Datos 2</a><br>
           <a class="dropdown-item" href="/VictorManuel/HOLA3.php">Meter Datos 3</a><br>
          </div>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Unidad 2
         </a>
         <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a href="/VictorManuel/HOLA4.php">Mosrtrar Datos 4</a><br>
            <a href="dropdown-item" href="/VictorManuel/Victor05.php">Mosrtrar Datos 5</a><br>
            <a href="dropdown-item" href="/VictorManuel/Victor06.php">Meter Datos 6</a><br>
          </div>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Unidad 3
         </a>
         <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a href="dropdown-item" href="/VictorManuel/Victor07.php">Mosrtrar Datos 7</a><br>
            <a href="dropdown-item" href="/VictorManuel/Victor08.php">Mosrtrar Datos 8</a><br>
            <a href="dropdown-item" href="/VictorManuel/Victor09.php">Mosrtrar Datos 9</a><br>
            <a href="dropdown-item" href="/VictorManuel/Victor010.php">Meter Datos 10</a><br>
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
 <label form="numero_control">numero control</label>
 <input type="text" id="numero_control" name="numero_control" required><br>
  <label form="nombre">nombre</label>
<input type="text" id="nombre" name="nombre" required><br>
<label form="apellido_paterno">apellido parterno</label>
 <input type="text" id="apellido_paterno" name="apellido_paterno" required><br>
 <label form="apellido_materno">apellido materno</label>
 <input type="text" id="apellido_materno" name="apellido_materno" required><br>

 <label form="id_edad">edad</label>
 <select name="edad" required>
 <option value= "">Seleccione una edad</option>
 <?php while($row = $result_edad->fetch_assoc()){
 echo "<option value = '". $row["id"] . " '>" . $row["edad"]. "</option>";
 }

 ?>
 </select>

 <label form="id_colonia">colonia</label>
<select name="colonia" required>
 <option value= "">Seleccione una colonia</option>
 <?php while($row = $result_colonias->fetch_assoc()){
echo "<option value = '". $row["id"] . " '>" . $row["nombre_colonias"]. "</option>";
 }

 ?>
 </select>
<label form="id_especialidad">especialidad</label>
<select name="especialidad" required>
 <option value= "">Seleccione una especialidad</option>
 <?php while($row = $result_especialidades->fetch_assoc()){
 echo "<option value = '". $row["id"] . " '>" . $row["nombre_especialidad"]. "</option>";
 }

 ?>
</select>
 <label form="id_genero">genero</label>
 <select name="genero" required>
 <option value= "">Seleccione una genero</option>
<?php while($row = $result_generos->fetch_assoc()){
 echo "<option value = '". $row["id"] . " '>" . $row["nombre_genero"]. "</option>";
 }

 ?>
 </select>


 <label form="correo">correo</label>
 <input type="text" id="correo" name="correo" required><br>
 <label form="telefono">telefono</label>
 <input type="text" id="telefono" name="telefono" required><br>
 <label form="fecha_ingreso">fecha ingreso</label>
 <input type="date" id="fecha_ingreso" name="fecha_ingreso" required><br>

 <input type="submit" value="Agregar registro">

 </form>
 </div>