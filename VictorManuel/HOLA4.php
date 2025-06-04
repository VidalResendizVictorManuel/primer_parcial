
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
       <h1>ESCUELAS SECUMDARIAS TECNICAS </h1>
<div class="container1">
    
        </div>

<table class="table table-bordered">

</form>


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