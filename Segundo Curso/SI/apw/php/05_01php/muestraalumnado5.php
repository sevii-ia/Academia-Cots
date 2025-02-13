<?php
$server="localhost";
$user="root";
$password="";
$enlace=mysqli_connect($server, $user, $password);

$bbdd="centroformacion05";
mysqli_select_db($enlace, $bbdd);

$sexo=$_GET['sexo'];
if ($sexo =="H")
{
        $sexoalu = "MASCULINO";
}
else
{
        $sexoalu = "FEMENINO";
}

$consulta="SELECT *
FROM alumnos, provincias, tutores
WHERE alumnos.provinciaalu=provincias.codprov AND alumnos.tutor=tutores.dnitutor AND sexoalu='$sexo'";
$result=mysqli_query($enlace, $consulta);
?>
<html>
        <head>
                <title>Conectar a servidor</title>
                <meta charset="UTF-8">
                <link rel="shortcut icon" href="../../favicon.ico"/>
                <link rel="stylesheet" href="styles.css">
        </head>
        <body>
        <h1>ALUMNOS DE SEXO: <?php echo $sexoalu; ?></h1>     
        <table border="1px">
                        <tr><th>Expediente</th><th>DNI</th><th>Nombre</th><th>Apellido</th><th>H/M</th><th>Direccion</th><th colspan="2">Provincia</th><th>Telefono</th><th colspan="3">Tutor/a-Nombre y Apellidos</th></tr>
                <?php
                while ($registro1=mysqli_fetch_array($result))
                        {
                        ?><tr>
                        <td><?php echo $registro1['numexpalu'];?></td>
                        <td><?php echo $registro1['dnialu'];?></td>
                        <td><?php echo $registro1['nombrealu'];?></td>
                        <td><?php echo $registro1['apealu'];?></td>
                        <td><?php echo $registro1['sexoalu'];?></td>
                        <td><?php echo $registro1['direccionalu'];?></td>
                        <td><?php echo $registro1['provinciaalu'];?></td>
                        <td><?php echo $registro1['nomprov'];?></td>
                        <td><?php echo $registro1['telefonoalu'];?></td>
                        <td><?php echo $registro1['tutor'];?></td>
                        <td><?php echo $registro1['nombretutor'];?></td>
                        <td><?php echo $registro1['apetutor'];?></td>
                        </tr>
                                <?php
                        }
                                ?>
                </table><br>
                <button><a href="formmuestraalumnado5.html">Volver</a></button>
        </body>
</html>