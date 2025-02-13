<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "cursosformacion22";
$enlace = mysqli_connect($servidor, $usuario, $contrasena);

mysqli_select_db($enlace, $basedatos);

$empleado=$_GET['empleado'];
$sueldo=$_GET['sueldo'];

$seleccion1 = "UPDATE personal SET num_personal='$empleado', sueldo='$sueldo' WHERE num_personal='$empleado'";
$result1 = mysqli_query($enlace, $seleccion1);

$seleccion = "SELECT * FROM personal WHERE num_personal='$empleado'";
$result = mysqli_query($enlace, $seleccion);
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
            <td>Nº empleado</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Direccion</td>
            <td>CP</td>
            <td>Provincia</td>
            <td>Fecha nacimiento</td>
            <td>Sexo</td>
            <td>Sueldo</td>
        </tr>
        <?php
        while($filapersonal = mysqli_fetch_array($result))
        {?>
            <tr>
                <td><?php echo $filapersonal['num_personal']; ?></td>
                <td><?php echo $filapersonal['nombre']; ?></td>
                <td><?php echo $filapersonal['apellido']; ?></td>
                <td><?php echo $filapersonal['calle']; ?></td>
                <td><?php echo $filapersonal['cp']; ?></td>
                <td><?php echo $filapersonal['poblacion']; ?></td>
                <td><?php echo $filapersonal['nacimiento']; ?></td>
                <td><?php echo $filapersonal['sexo']; ?></td>
                <td><?php echo $filapersonal['sueldo']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>