<?php
$username = "root";
$password = "";
$servername = "localhost";
$database = "tdgm";

$conexion = new mysqli($servername, $username, $password, $database);
if ($conexion->connect_error) { 
   die("Conexión fallida: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$id_categoria = $_POST["categoria"];

$sql = "INSERT INTO productos (nombre, precio, id_categoria) VALUES ('$nombre', '$precio', '$id_categoria')";
if ($conexion->query($sql) === TRUE) {
echo "<p style='color:green;'>Producto agregado recientemente</p>";
} else {
echo "<p style='color:red;'>Error: " . $conexion->error . "</p>";
 }
}

$sql_categorias = "SELECT * FROM categorias";
$result_categorias = $conexion->query($sql_categorias);
?>

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
background-color: rgb(69, 133, 168);
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


<h1>Registrar Productos</h1>
<form method="POST">
<label>Nombre del producto: </label>
<input type="text" name="nombre" required><br><br>
<label>Precio: </label>
<input type="number" name="precio" required><br><br>
<label>Categoría: </label>
 <select name="categoria" required>
<option value="">Seleccionar una categoría</option>
<?php
 if ($result_categorias->num_rows > 0) {
 while ($row = $result_categorias->fetch_assoc()) {
echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
}
 }
?>
 </select><br><br>
<input type="submit" value="Registrar Producto">
 </form>


</form>
<h2>Lista de Productos</h2>
<table>
<tr>
 <th>Nombre</th>
<th>Precio</th>
<th>Categoria</th>
</tr>
<?php
$sql_productos = "SELECT productos.nombre, productos.precio, categorias.nombre AS categoria FROM productos JOIN categorias ON productos.id_categoria = categorias.id";
$result_productos = $conexion->query($sql_productos);
if($result_productos->num_rows>0){
while($row = $result_productos ->fetch_assoc()){
echo "<tr>
<th>{$row['nombre']}</th>
<th>{$row['precio']}</th>
<th>{$row['categoria']}</th>
</tr>";
}
}else{
echo "<tr><td>No hay productos registrados</td></tr>";
}
?>
</body>
</html>