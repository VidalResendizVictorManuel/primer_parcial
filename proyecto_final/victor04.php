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
<html>
<head>
<title>Registrar Productos</title>
</head>
<body>

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