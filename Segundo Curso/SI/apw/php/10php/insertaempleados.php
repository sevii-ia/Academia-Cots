<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "empleados";
$enlace = mysqli_connect($servidor, $usuario, $contrasena);

mysqli_select_db($enlace, $basedatos);

$dni=$_GET['dni'];
$nombre=$_GET['nombre'];
$apellidos=$_GET['apellidos'];
$domicilio=$_GET['domicilio'];
$municipio=$_GET['municipio'];
$provincias=$_GET['provincias'];
$sexo=$_GET['sexo'];

$seleccion1 = "INSERT INTO empleados VALUES ('$dni', '$nombre', '$apellidos', '$domicilio', '$municipio', '$provincias', '$sexo')";
$result1=mysqli_query($enlace, $seleccion1);

$seleccion = "SELECT * FROM empleados";
$result=mysqli_query($enlace, $seleccion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>
<body>
    <h1>DATOS DE EL EMPLEADO INSERTADOS</h1>
    <a href="menu.html">Menu principal</a>
    <table align="center" border="1">
        <tr>
            <td>DNI</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Domicilio</td>
            <td>Municipio</td>
            <td>Provincia</td>
            <td>Sexo</td>
        </tr>
        <?php
        while($fila = mysqli_fetch_array($result))
        { ?>
            <tr>
                <td><?php echo $fila['dni']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['apellidos']; ?></td>
                <td><?php echo $fila['domicilio']; ?></td>
                <td><?php echo $fila['municipio']; ?></td>
                <td><?php echo $fila['codprov']; ?></td>
                <td><?php echo $fila['sexo']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>