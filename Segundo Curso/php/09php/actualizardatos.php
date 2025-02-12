<?php
include "config.php";

$zona = $_GET['zona'];
$idpiso = $_GET['idpiso'];
$superficie = $_GET['superficie'];
$habitaciones = $_GET['habitaciones'];
$aseos = $_GET['aseos'];
$fecha = $_GET['fecha'];
$precio = $_GET['precio'];

$seleccion = "UPDATE viviendas SET zona='$zona', superficie='$superficie', habitaciones='$habitaciones', aseos='$aseos', fecha='$fecha', precio='$precio' WHERE idpiso='$idpiso'";
$result = mysqli_query($enlace, $seleccion);

$seleccion2 = "SELECT * FROM zonas,viviendas WHERE viviendas.zona=zonas.idzona";
$datos = mysqli_query($enlace, $seleccion2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion</title>
</head>
<body>
    <h3>DATOS DE LA VIVIENDA ACTUALIZADOS</h3>
    <a href="menu.html">Menu principal</a><br>
    <table align="center" border="1">
    <tr>
        <td colspan="2">Zona</td>
        <td>Superficie(m2)</td>
        <td>Habitaciones</td>
        <td>Aseos</td>
        <td>Fecha</td>
        <td>Precio</td>
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
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>