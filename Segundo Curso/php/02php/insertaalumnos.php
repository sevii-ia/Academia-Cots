<?php
$server="localhost";
$user="root";
$password="";
$enlace=mysqli_connect($server, $user, $password);

$basedatos="centroformacion02";
mysqli_select_db($enlace, $basedatos);

$expe=$_GET['expediente'];
$dni=$_GET['dni'];
$nom=$_GET['nombre'];
$ape=$_GET['apellidos'];
$dire=$_GET['direccion'];
$prov=$_GET['provincia'];
$tele=$_GET['telefono'];
$tut=$_GET['tutores'];

$insertar=" INSERT INTO alumnos(numexpalu, dnialu, nombrealu, apealu, direccionalu, provinciaalu, telefonoalu, tutor)
VALUES('$expe', '$dni', '$nom', '$ape', '$dire', '$prov', '$tele', '$tut')";
$result=mysqli_query($enlace, $insertar);
?>
<html>
        <head>
                <title>Conectar a servidor</title>
                <meta charset="UTF-8">
                <link rel="shortcut icon" href="../../favicon.ico"/>
        </head>
        <body>
        <table align="center" width="500" border="1px">
                <?php
                        $datos="SELECT * FROM alumnos,tutores WHERE alumnos.tutor=tutores.dnitutor";
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
                        <td align="center">DNI Tutor</td>
                        <td align="center">Nombre Tutor</td>
                        <td align="center">Apellido Tutor</td>
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
                        <td><?php echo $registro1['tutor'];?></td>
                        <td><?php echo $registro1['nombretutor'];?></td>
                        <td><?php echo $registro1['apetutor'];?></td>
                        </tr>
                                <?php
                        }
                                ?>
                </table><br>
                <button><a href="forminsertaalumnos.php">Volver</a></button>
        </body>
</html>