<?php
$server="localhost";
$user="root";
$password="";
$enlace=mysqli_connect($server, $user, $password);

$basedatos="centroformacion02";
mysqli_select_db($enlace, $basedatos);

$dni=$_GET['dni'];
$nom=$_GET['nombre'];
$ape=$_GET['apellidos'];
$dir=$_GET['direccion'];
$prov=$_GET['provincia'];
$tele=$_GET['telefono'];

$insertar=" INSERT INTO tutores(dnitutor, nombretutor, apetutor, direcciontutor, provinciatutor, telefonotutor)
VALUES('$dni', '$nom', '$ape', '$dir', '$prov', '$tele')";
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
                        $datos="SELECT * FROM tutores";
                        $result2=mysqli_query($enlace, $datos);
                ?>
                <tr>
                        <td align="center">DNI Tutor</td>
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
                        <td><?php echo $registro1['dnitutor'];?></td>
                        <td><?php echo $registro1['nombretutor'];?></td>
                        <td><?php echo $registro1['apetutor'];?></td>
                        <td><?php echo $registro1['direcciontutor'];?></td>
                        <td><?php echo $registro1['provinciatutor'];?></td>
                        <td><?php echo $registro1['telefonotutor'];?></td>
                        
                        </tr>
                                <?php
                        }
                                ?>
                </table><br>
                <button><a href="forminsertatutor.html">Volver</a></button>
        </body>
</html>