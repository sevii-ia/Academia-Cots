<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "empleados";
$enlace = mysqli_connect($servidor, $usuario, $contrasena);

mysqli_select_db($enlace, $basedatos);

$provincias=$_GET['provincias'];

if($provincias==0)
{
    $seleccion = "SELECT * FROM empleados";
    $result=mysqli_query($enlace, $seleccion);
}
else
{
    $seleccion = "SELECT * FROM empleados WHERE codprov='$provincias'";
    $result=mysqli_query($enlace, $seleccion);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
</head>
<body>
    <h1>RESULTADO DE LA BUSQUEDA</h1>
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
            <td colspan="2">Acciones</td>
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
                <td><a href="modificarempleado.php?dni=<?php echo $fila['dni']; ?>">Modificar</a></td>
                <td><a href="eliminarempleado.php?dni=<?php echo $fila['dni']; ?>"">Eliminar</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>