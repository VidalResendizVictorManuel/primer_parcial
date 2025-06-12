<?php
$username = "root";
$password = "";
$servername = "localhost";
$database = "escuela";

$conexion = new mysqli($servername, $username, $password, $database);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Procesar el formulario si se envió
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nc = $conexion->real_escape_string($_POST['numero_control']);
    $nom = $conexion->real_escape_string($_POST['nombre']);
    $ap = $conexion->real_escape_string($_POST['apellido_paterno']);
    $am = $conexion->real_escape_string($_POST['apellido_materno']);
    $ie = $conexion->real_escape_string($_POST['id_edad']);
    $ic = $conexion->real_escape_string($_POST['id_colonia']);
    $iesp = $conexion->real_escape_string($_POST['id_especialidad']);
    $ig = $conexion->real_escape_string($_POST['id_genero']);
    $email = $conexion->real_escape_string($_POST['correo']);
    $tel = $conexion->real_escape_string($_POST['telefono']);
    $fecha = $conexion->real_escape_string($_POST['fecha_ingreso']);

    $sql = "INSERT INTO alumnos (
        numero_control, nombre, apellido_paterno, apellido_materno,
        id_edad, id_colonia, id_especialidad, id_genero,
        correo, telefono, fecha_ingreso
    ) VALUES (
        '$nc', '$nom', '$ap', '$am',
        '$ie', '$ic', '$iesp', '$ig',
        '$email', '$tel', '$fecha'
    )";

    if ($conexion->query($sql) === FALSE) {
        echo "<p style='color:red;'>Error al agregar: " . $conexion->error . "</p>";
    } else {
        echo "<p style='color:green;'>Alumno agregado exitosamente.</p>";
    }
}

// Obtener datos para los select
$result_edades = $conexion->query("SELECT id, edad FROM edades");
$result_colonias = $conexion->query("SELECT id, nombre_colonias FROM colonias");
$result_especialidades = $conexion->query("SELECT id, nombre_especialidad FROM especialidades");
$result_generos = $conexion->query("SELECT id, nombre_genero FROM generos");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de Alumnos</title>
</head>
<body>
<h1>Registro de Alumnos</h1>

<form method="POST">
    <label>No. de control:</label><br>
    <input type="text" name="numero_control" required><br><br>

    <label>Nombre(s):</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Apellido paterno:</label><br>
    <input type="text" name="apellido_paterno" required><br><br>

    <label>Apellido materno:</label><br>
    <input type="text" name="apellido_materno"><br><br>

    <label>Edad:</label><br>
    <select name="id_edad" required>
        <option value="">Seleccione edad</option>
        <?php while($r = $result_edades->fetch_assoc()): ?>
            <option value="<?= $r['id'] ?>"><?= $r['edad'] ?></option>
        <?php endwhile; ?>
    </select><br><br>

    <label>Colonia:</label><br>
    <select name="id_colonia" required>
        <option value="">Seleccione colonia</option>
        <?php while($r = $result_colonias->fetch_assoc()): ?>
            <option value="<?= $r['id'] ?>"><?= $r['nombre_colonias'] ?></option>
        <?php endwhile; ?>
    </select><br><br>

    <label>Especialidad:</label><br>
    <select name="id_especialidad" required>
        <option value="">Seleccione especialidad</option>
        <?php while($r = $result_especialidades->fetch_assoc()): ?>
            <option value="<?= $r['id'] ?>"><?= $r['nombre_especialidad'] ?></option>
        <?php endwhile; ?>
    </select><br><br>

    <label>Género:</label><br>
    <select name="id_genero" required>
        <option value="">Seleccione género</option>
        <?php while($r = $result_generos->fetch_assoc()): ?>
            <option value="<?= $r['id'] ?>"><?= $r['nombre_genero'] ?></option>
        <?php endwhile; ?>
    </select><br><br>

    <label>Correo:</label><br>
    <input type="email" name="correo"><br><br>

    <label>Teléfono:</label><br>
    <input type="text" name="telefono"><br><br>

    <label>Fecha de ingreso:</label><br>
    <input type="date" name="fecha_ingreso" required><br><br>

    <input type="submit" value="Agregar alumno">
</form>

<hr>

<h2>Lista de Alumnos</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>No. Control</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Colonia</th>
        <th>Especialidad</th>
        <th>Género</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Fecha Ingreso</th>
    </tr>
    <?php
    $sql2 = "SELECT a.numero_control, 
                    CONCAT(a.nombre, ' ', a.apellido_paterno, ' ', a.apellido_materno) AS nombre_completo,
                    e.edad, c.nombre_colonias, es.nombre_especialidad, g.nombre_genero,
                    a.correo, a.telefono, a.fecha_ingreso
             FROM alumnos a
             JOIN edades e ON a.id_edad = e.id
             JOIN colonias c ON a.id_colonia = c.id
             JOIN especialidades es ON a.id_especialidad = es.id
             JOIN generos g ON a.id_genero = g.id";
    
    $res2 = $conexion->query($sql2);
    while ($f = $res2->fetch_assoc()) {
        echo "<tr>
            <td>{$f['numero_control']}</td>
            <td>{$f['nombre_completo']}</td>
            <td>{$f['edad']}</td>
            <td>{$f['nombre_colonias']}</td>
            <td>{$f['nombre_especialidad']}</td>
            <td>{$f['nombre_genero']}</td>
            <td>{$f['correo']}</td>
            <td>{$f['telefono']}</td>
            <td>{$f['fecha_ingreso']}</td>
        </tr>";
    }
    ?>
</table>
</body>
</html>
