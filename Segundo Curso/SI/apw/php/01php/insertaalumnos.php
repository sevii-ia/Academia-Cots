<?php
$server="localhost";
$user="root";
$password="";
$enlace=mysqli_connect($server, $user, $password);

$basedatos="centroformacion01";
mysqli_select_db($enlace, $basedatos);

$expe=$_GET['expediente'];
$dni=$_GET['dni'];
$nom=$_GET['nombre'];
$ape=$_GET['apellidos'];
$dire=$_GET['direccion'];
$prov=$_GET['provincia'];
$tele=$_GET['telefono'];

$insertar=" INSERT INTO alumnos(numexpalu, dnialu, nombrealu, apealu, direccionalu, provinciaalu, telefonoalu)
VALUES('$expe', '$dni', '$nom', '$ape', '$dire', '$prov', '$tele')";
$result=mysqli_query($enlace, $insertar);
?>
<html>
        <head>
                <title>Conectar a servidor</title>
                <meta charset="UTF-8">
                <link rel="shortcut icon" href="../../favicon.ico"/>
                <link rel="stylesheet" href="styles.css">
        </head>
        <body>
        <table align="center" width="500" border="1px">
                <?php
                        $datos="SELECT * FROM alumnos";
                        $result2=mysqli_query($enlace, $datos);
                ?>
                <tr>
                        <td align="center">Expediente</td>
                        <td align="center">DNI</td>
                        <td align="center">Nombre</td>
                        <td align="center">Apellido</td>
                        <td align="center">Direccion</td>
                        <td align="center">Provincia</td>
                        <td align="center">Telefono</td>
                </tr>
                <?php
                while ($registro1=mysqli_fetch_array($result2))
                        {
                        ?><tr>
                        <td><?php echo $registro1['numexpalu'];?></td>
                        <td><?php echo $registro1['dnialu'];?></td>
                        <td><?php echo $registro1['nombrealu'];?></td>
                        <td><?php echo $registro1['apealu'];?></td>
                        <td><?php echo $registro1['direccionalu'];?></td>
                        <td><?php echo $registro1['provinciaalu'];?></td>
                        <td><?php echo $registro1['telefonoalu'];?></td>
                        </tr>
                                <?php
                        }
                                ?>
                </table><br>
                <button><a href="forminsertaalumnos.html">Volver</a></button>
        </body>
</html>