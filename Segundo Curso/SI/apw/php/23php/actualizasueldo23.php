<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "cursosformacion23";
$enlace = mysqli_connect($servidor, $usuario, $contrasena);

mysqli_select_db($enlace, $basedatos);

$sueldo=$_GET['sueldo'];
$personal=$_GET['personal'];

$seleccion1 = "UPDATE personal SET sueldo='$sueldo' WHERE num_personal='$personal'";
$result1 = mysqli_query($enlace, $seleccion1);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <table align="center" border="1">
    <h1>Salario actualizado</h1>
    <tr>
        <td>Nº empleado</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Direccion</td>
        <td>CP</td>
        <td>Provincia</td>
        <td>Fecha nacimiento</td>
        <td>Sexo</td>
        <td>Sueldo</td>
    </tr>
        <?php
        $seleccion = "SELECT * FROM personal WHERE num_personal='$personal'";
        $result = mysqli_query($enlace, $seleccion);

        while($fila=mysqli_fetch_array($result))
        {?>
            <tr>
                <td><?php echo $fila['num_personal']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['apellido']; ?></td>
                <td><?php echo $fila['calle']; ?></td>
                <td><?php echo $fila['cp']; ?></td>
                <td><?php echo $fila['poblacion']; ?></td>
                <td><?php echo $fila['nacimiento']; ?></td>
                <td><?php echo $fila['sexo']; ?></td>
                <td><?php echo $fila['sueldo']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>