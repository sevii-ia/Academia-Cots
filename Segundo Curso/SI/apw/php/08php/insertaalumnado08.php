<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "centroformacion08";
$enlace = mysqli_connect($servidor, $usuario, $contrasena);

mysqli_select_db($enlace, $basedatos);

$expediente = $_GET['expediente'];
$dni = $_GET['dni'];
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$direccion = $_GET['direccion'];
$provincias = $_GET['provincias'];
$telefono = $_GET['telefono'];
$sexo = $_GET['sexo'];
$tutor = $_GET['tutores'];

$insertar = "INSERT INTO alumnos VALUES ('$apellidos', '$direccion', '$telefono', '$expediente', '$dni', '$nombre', '$tutor', '$provincias', '$sexo')";
$resultado = mysqli_query($enlace, $insertar);

$seleccion = "SELECT * FROM alumnos,provincias,tutores WHERE alumnos.provinciaalu=provincias.codprov AND alumnos.tutor=tutores.dnitutor AND numexpalu='$expediente'";
$result = mysqli_query($enlace, $seleccion);
$datos=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>
<body>
    <table align="center" border="1">
        <tr>
            <td>Expediente</td>
            <td>DNI</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Direcion</td>
            <td colspan="2">Provincia</td>
            <td>Telefono</td>
            <td>Sexo</td>
            <td colspan="2">Tutor/a</td>
        </tr>
        <tr>
            <td><?php echo $datos['numexpalu']; ?></td>
            <td><?php echo $datos['dnialu']; ?></td>
            <td><?php echo $datos['nombrealu']; ?></td>
            <td><?php echo $datos['apealu']; ?></td>
            <td><?php echo $datos['direccionalu']; ?></td>
            <td><?php echo $datos['provinciaalu']; ?></td>
            <td><?php echo $datos['nomprov']; ?></td>
            <td><?php echo $datos['telefonoalu']; ?></td>
            <td><?php echo $datos['sexoalu']; ?></td>
            <td><?php echo $datos['tutor']; ?></td>
            <td><?php echo $datos['nombretutor']; ?></td>
        </tr>
    </table><br>

    <button><a href="forminsertaalumnado08.php">Volver</a></button>
</body>
</html>