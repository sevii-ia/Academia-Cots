<?php
include "config.php";

if(empty($_GET['todo']))
{
$zonaform = $_GET['zona'];
$fecha = $_GET['ano'];
}

if(empty($zonaform) && empty($fecha))
{
    $seleccion = "SELECT * FROM zonas,viviendas WHERE viviendas.zona=zonas.idzona ORDER BY fecha";
    $datos = mysqli_query($enlace, $seleccion);
    $fecha = "";
    $zona['nomzona'] = "";
}
else
{   
    $seleccion = "SELECT * FROM zonas,viviendas WHERE (viviendas.zona=zonas.idzona AND zona='$zonaform') OR (viviendas.zona=zonas.idzona AND fecha='$fecha') ORDER BY fecha";
    $datos = mysqli_query($enlace, $seleccion);

    $seleccion1 = "SELECT nomzona FROM zonas WHERE idzona='$zonaform'";
    $datos1 = mysqli_query($enlace, $seleccion1);
    $zona = mysqli_fetch_array($datos1);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar busqueda</title>
</head>
<body>
    <h3>RESULTADO DE LA BUSQUEDA</h3>
    <h3>Zona: <?php echo $zona['nomzona']; ?></h3>
    <h3>Año: <?php echo $fecha; ?></h3>
    <a href="menu.html">Menu principal</a><br>
    <table align="center" border="1">
    <tr>
        <td colspan="2">Zona</td>
        <td>Superficie(m2)</td>
        <td>Habitaciones</td>
        <td>Aseos</td>
        <td>Fecha</td>
        <td>Precio</td>
        <td colspan="2">Acciones</td>
    </tr>
    <?php
        while($filavivienda=mysqli_fetch_array($datos))
        {?>
            <tr>
            <td><?php echo $filavivienda['idzona']; ?></td>
            <td><?php echo $filavivienda['nomzona']; ?></td>
            <td><?php echo $filavivienda['superficie']; ?></td>
            <td><?php echo $filavivienda['habitaciones']; ?></td>
            <td><?php echo $filavivienda['aseos']; ?></td>
            <td><?php echo $filavivienda['fecha']; ?></td>
            <td><?php echo $filavivienda['precio']; ?></td>
            <td><a href="modificarvivienda.php?codigopiso=<?php echo $filavivienda['idpiso']; ?>">Modificar</a></td>
            <td><a href="borrarvivienda.php?codigopiso=<?php echo $filavivienda['idpiso']; ?>">Eliminar</a><?php  ?></td>
            </tr>
        <?php
        }
        ?>

    </table>
</body>
</html>