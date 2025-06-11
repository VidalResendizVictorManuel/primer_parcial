<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "pokemones";

               $conexion = new mysqli($servername, $username, $password, $database);
               if ($conexion->connect_error) {
                     die("Conexión fallida: " . $conexion->connect_error); 
                     }

                       $sql_tipo = "SELECT id, tipo FROM tipo";
                       $result_tipo = $conexion->query($sql_tipo);
                       $sql_generacion = "SELECT id, nombre_generacion FROM generacion";
                       $result_generacion = $conexion->query($sql_generacion);
                       $sql_meta = "SELECT id, meta FROM meta";
                       $result_meta = $conexion->query($sql_meta);
                       $sql_atrapable = "SELECT id, atrapable FROM atrapable";
                       $result_atrapable = $conexion->query($sql_atrapable);
                       $sql_clase = "SELECT id, clase FROM clase";
                       $result_clase = $conexion->query($sql_clase);
                    
 
               if ($_SERVER["REQUEST_METHOD"] == "POST") {
               var_dump($_POST);
               $numero_de_la_pokedex = $conexion->real_escape_string($_POST["numero_de_la_pokedex"]);
               $nombre = $conexion->real_escape_string($_POST["nombre"]);
               $evoluciones = $conexion->real_escape_string($_POST["evoluciones"]);
               $pega_efectivo = $conexion->real_escape_string($_POST["pega_efectivo"]);
               $id_tipo = $conexion->real_escape_string($_POST["id_tipo"]);
               $id_generacion = $conexion->real_escape_string($_POST["id_generacion"]);
               $id_meta = $conexion->real_escape_string($_POST["id_meta"]);
               $id_atrapable = $conexion->real_escape_string($_POST["id_atrapable"]);
               $id_clase = $conexion->real_escape_string($_POST["id_clase"]);
               $debilidades = $conexion->real_escape_string($_POST["debilidades"]);
               $descripcion = $conexion->real_escape_string($_POST["descripcion"]);
              $fecha_ingreso = $conexion->real_escape_string($_POST["fecha_ingreso"]);

            $sql = "INSERT INTO pokemones (numero_de_la_pokedex, nombre, evoluciones, pega_efectivo, id_tipo, id_generacion, id_meta, id_atrapable, id_clase,
             debilidades, descripcion, fecha_ingreso) VALUES ('$numero_de_la_pokedex', '$nombre', '$evoluciones', '$pega_efectivo', '$id_tipo',
           '$id_generacion', '$id_meta', '$id_atrapable', '$id_clase', '$debilidades', '$descripcion', '$fecha_ingreso')";
      
          if ($conexion->query($sql) === TRUE) {
           echo "<p class='error'>Error al agregar los datos: " . $conexion->error . "</p>";
           header("Location: " . $_SERVER['PHP_SELF']);
           exit();
          } else {  
        }
      }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Manuel Vidal Resendiz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <style>
<style>

    .agua{
        display:(flex);
    }
   
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #0a0a0a; 
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;

    }




    h1 {
        color: #ffffff;
        text-align: center;
        margin-bottom: 30px;
    }

    #formulario {
        background-color: #0d47a1; 
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.7);
        width: 100%;
        max-width: 400px;
        color: #ffffff;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input[type="text"], input[type="date"], select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        background-color: #1e1e1e;
        color: #ffffff;
        font-size: 16px;
    }

    input[type="submit"] {
        background-color: #00c853; 
        color: #000000;
        border: none;
        padding: 12px;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #00e676;
    }

    .success {
        color: #00e676;
        text-align: center;
    }

    .error {
        color: #ff5252;
        text-align: center;
    }
</style>

<style>

    body{
        background-image: url('purplenight.gif');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        

        
    }


    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 40px;
        background-color: #1e1e1e;
        color: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0,0,0,0.7);
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
    }

    th {
        background-color: #0d47a1;
        color: #ffffff;
        font-weight: bold;
        border-bottom: 2px solid #1565c0;
    }

    tr:nth-child(even) {
        background-color: #2a2a2a;
    }

    tr:hover {
        background-color: #333333;
    }

    td {
        border-bottom: 1px solid #444444;
    }


    
</style>


</head>
<body>

            <div class="agua">
            <div class="container1" style="display:flex; max-width:600px; margin:auto;">
                         <form method="POST" id="formulario">

                     <label for="numero_de_la_pokedex">¿Que numero de la pokedex es?</label>
                     <input type="text" id="numero_de_la_pokedex" name="numero_de_la_pokedex" required><br>

                     <label for="nombre">Nombre del pokemon</label>
                     <input type="text" id="nombre" name="nombre" required><br>

                    <label for="evoluciones">¿Cuales son sus evoluciones?</label>
                    <input type="text" id="evoluciones" name="evoluciones" required><br>

                     <label for="pega_efectivo">¿Pega efectivo?</label>
                    <input type="text" id="pega_efectivo" name="pega_efectivo" required><br>


            <label for="id_tipo">Tipo principal</label>
            <select name="id_tipo" required>
                <option value="">Seleccione un tipo</option>
                <?php while ($row = $result_tipo->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["tipo"] . "</option>";
                } ?>
            </select>

            <label for="id_generacion">Genaracion</label>
            <select name="id_generacion" required>
                <option value="">Elija una generacion</option>
                <?php while ($row = $result_generacion->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nombre_generacion"] . "</option>";
                } ?>
            </select>

            <label for="id_meta">¿Es meta ?</label>
            <select name="id_meta" required>
                <option value="">Seleccione una opcion</option>
                <?php while ($row = $result_meta->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["meta"] . "</option>";
                } ?>
            </select>
            
            <label for="id_atrapable">¿Es atrapable?</label>
            <select name="id_atrapable" required>
                <option value="">Seleccione una opcion </option>
                <?php while ($row = $result_atrapable->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["atrapable"] . "</option>";
                } ?>
            </select>

            <label for="id_clase">Es legendario, seuodo legendario o comun?</label>
            <select name="id_clase" required>
                <option value="">Seleccione una opcion </option>
                <?php while ($row = $result_clase->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["clase"] . "</option>";
                } ?>
            </select>

             

            <label for="debilidades">debilidades</label>
            <input type="text" id="debilidades" name="debilidades" required><br>

            <label for="descripcion">descripcion</label>
            <input type="text" id="descripcion" name="descripcion" required><br>

            <label for="fecha_ingreso">Fecha de ingreso</label>
            <input type="date" id="fecha_ingreso" name="fecha_ingreso" required><br>
            <input type="submit" value="Agregar registro">
        </form>
    </div>

    <h1>POKEMONES DE LA POKEDEX</h1>
<div class="container1">
    
        </div>

<table class="table table-bordered">
<thead>
    <tr>
        <th>Numero de la pokedex</th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Generacion</th>
        <th>Meta</th>
        <th>Atrapable</th>
        <th>Evoluciones</th>
        <th>Pega efectivo</th>
        <th>Tipo considerado</th>
        <th>Debilidades</th>
        <th>Descripcion</th>
        <th>Fecha de Ingreso</th>
    </tr>
        </thead>


<?php



$sql = "SELECT
             p.numero_de_la_pokedex,
             p.nombre,
             t.tipo,
             g.nombre_generacion,
             m.meta,
             a.atrapable,
             p.evoluciones,
             p.pega_efectivo,
             c.clase,
             p.debilidades,
             p.descripcion,
             p.fecha_ingreso
             FROM pokemones p
             JOIN tipo t ON p.id_tipo = t.id
             JOIN generacion g ON p.id_generacion = g.id
             JOIN meta m ON p.id_meta = m.id
             JOIN atrapable a ON p.id_atrapable = a.id
             JOIN clase c ON p.id_clase = c.id";

               $resultado = $conexion->query($sql);
               if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                       echo "<tr>
                        <td>{$row['numero_de_la_pokedex']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['tipo']}</td>
                        <td>{$row['nombre_generacion']}</td>
                        <td>{$row['meta']}</td>
                        <td>{$row['atrapable']}</td>
                        <td>{$row['evoluciones']}</td>
                        <td>{$row['pega_efectivo']}</td>
                        <td>{$row['clase']}</td>
                        <td>{$row['debilidades']}</td>
                        <td>{$row['descripcion']}</td>
                        <td>{$row['fecha_ingreso']}</td>
                        </tr>";
                        }

                         echo "</table>";
                          } else {
                                echo "No se encontraron resultados.";
                          }
                          ?>
</div>
</body>
</html>