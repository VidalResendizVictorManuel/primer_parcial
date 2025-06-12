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

 <style>

body {
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #fff; 
}

.agua1 {
    background-color:rgb(255, 255, 255);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(67, 57, 57, 0.3);
    text-align: center;
    max-width: 400px;  
    width: 100%;
    margin: auto;  
}

  h1 {
    text-align: center;
    color: #ff79c6;
    margin-bottom: 15px;
  }
  form {
    display: flex;
    flex-direction: column;
  }
  label {
    font-size: 16px;
    margin-bottom: 5px; 
  }
  input[type="text"] {
    padding: 8px;
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    background-color: #44475a;
    color: #fff;
  }
  input[type="submit"] {
    padding: 10px;
    background-color: #50fa7b;
    border: none;
    color: #282a36;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
  }
  input[type="submit"]:hover {
    background-color: #3ae374;
  }

  .navbar {
    background-color: limegreen;
    width: 100%;
    padding: 10px 0; 
    position: fixed; 
    top: 0; 
    left: 0;
    text-align: center; 
    z-index: 1000; 
    border-radius: 10px; 
}

.navbar a {
    color: red;
    font-weight: 
    margin: 0 15px;
    text-decoration:
}


.form-container {
    background-color:rgb(44, 44, 60);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(18, 17, 17, 0.3);
    text-align: center;
    width: 300px;
}
.holi{
  display: flex;
  display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;

    width: 80%;
    max-width: 600px;
    text-align: center;
}
</style>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Manuel Vidal Resendiz</title>
</head>
<body>
        
<nav class="navbar navbar-light" style="background-color:rgb(22, 27, 21) ;">
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
       <div class="holi">
       <div class="jumbotron">
       <h1> METER DATOS </h1>
       <div class="container1">
       <form method="POST" id="formulario"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post" id="formulario">
       <lable for="id">id</label>
       <input type="text" id="id" name="id" required><br>
       <lable for="Pokemon">Pokemon:</label>
       <input type="text" id="Pokemon" name="Pokemon" required><br>
       <lable for="Evoluciones">Evoluciones:</label>
       <input type="text" id="Evoluciones" name="Evoluciones" required><br>
       <lable for="Tipo">Tipo:</label>
       <input type="text" id="Tipo" name="Tipo" required><br>
       <lable for="Debilidades">Debilidades:</label>
       <input type="text" id="Debilidades" name="Debilidades" required><br>
       <lable for="Efectivo">Efectivo:</label>
       <input type="text" id="Efectivo" name="Efectivo" required><br>
       <input type="submit" value="Agregar registro">
      </form>
        </div>
       <?php 
       $username = "root";
       $password = "";
       $servername = "localhost";
       $database = "pokemon";

       $conexion = new mysqli($servername, $username, $password, $database);
       if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
    function agua($conexion){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      var_dump($_POST); //nueva linea
      //se obitnene los datos del formulario
      $id = $conexion->real_escape_string($_POST ["id"]); 
      $pokemon = $conexion->real_escape_string($_POST ["Pokemon"]); 
      $Evoluciones = $conexion->real_escape_string($_POST ["Evoluciones"]); 
      $Tipo = $conexion->real_escape_string($_POST ["Tipo"]); 
      $Debilidades = $conexion->real_escape_string($_POST ["Debilidades"]); 
      $Efectivo = $conexion->real_escape_string($_POST ["Efectivo"]);
    
     $sql = "INSERT INTO agua (id, Pokemon, Evoluciones, Tipo, Debilidades, Efectivo) VALUES ('$id', '$Pokemon', '$Evoluciones', '$Tipo', '$Debilidades', '$Efectivo')";
     if($conexion->query($sql)==TRUE){
      echo "<p class= 'success'>Nueva monster agregada con exito.</p>";
      header("Location: ". $_SERVER['PHP_SELF']);
     }else{
      echo "<p class='error'> Error al agregar la monster:" . $conexion->error . "</p>";
      exit();
     }
    }
  } agua($conexion);
    //Mostrar datos de la tabla
    $sql = "SELECT * FROM agua ORDER BY id DESC";
    $resultado = $conexion->query($sql);
       ?>
       <h2> Registros ingresados </h2>
       <table>
          <tr>
            <th>id</th>
            <th>Pokemon</th>
            <th>Evoluciones</th>
            <th>Tipo</th>
            <th>Debilidades</th>
            <th>Efectivo</th>
        </tr>
        <?php
        if($resultado->num_rows >0){
          while($fila= $resultado->fetch_assoc()){
            echo "<tr>
            <td>". $fila['id']. "</td>
            <td>". $fila['Pokemon']. "</td>
            <td>". $fila['Evoluciones']. "</td>
            <td>". $fila['Tipo']. "</td>
            <td>". $fila['Debilidades']. "</td>
            <td>". $fila['Efectivo']. "</td>
            </tr>";
          }
          echo "</table>";
         }else{
          echo "<tr><td colspan='4'> No hay registros aun. </td></tr>"
           ;}
           $conexion->close();
            ?>
  </table>
  </div>
  
</body>
</html>