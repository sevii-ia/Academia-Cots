<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "cursosformacion21";
$enlace = mysqli_connect($servidor, $usuario, $contrasena);

mysqli_select_db($enlace, $basedatos);

$empleado=$_GET['empleado'];
$sueldo=$_GET['sueldo'];

$actualizacion = "UPDATE personal SET sueldo='$sueldo' WHERE num_personal='$empleado'";
$result = mysqli_query($enlace, $actualizacion);

$seleccion = "SELECT * FROM personal";
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
    <h1 align="center">Salario actualizado</h1>
    <table align="center" border="1">
        <tr>
            <td colspan="3">Empleado/a</td>
            <td>Direccion</td>
            <td>CP</td>
            <td>Provincia</td>
            <td>Fecha nacimiento</td>
            <td>Sexo</td>
            <td>Sueldo</td>
        </tr>
        <tr>
            <td><?php echo $datos['num_personal']; ?></td>
            <td><?php echo $datos['nombre']; ?></td>
            <td><?php echo $datos['apellido']; ?></td>
            <td><?php echo $datos['calle']; ?></td>
            <td><?php echo $datos['cp']; ?></td>
            <td><?php echo $datos['poblacion']; ?></td>
            <td><?php echo $datos['nacimiento']; ?></td>
            <td><?php echo $datos['sexo']; ?></td>
            <td><?php echo $datos['sueldo']; ?></td>
        </tr>
    </table>
</body>
</html>