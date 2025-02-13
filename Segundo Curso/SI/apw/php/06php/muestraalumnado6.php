<?php
$server="localhost";
$user="root";
$password="";
$enlace=mysqli_connect($server, $user, $password);

$basedatos="centroformacion06";
mysqli_select_db($enlace, $basedatos);

$s=$_GET['sexo'];
$prov=$_GET['provincias'];
?>
<html>
        <head>
                <title>Conectar a servidor</title>
                <meta charset="UTF-8">
                <link rel="shortcut icon" href="../../favicon.ico"/>
        </head>
        <body>
        <?php
                        $datos="SELECT * FROM alumnos,tutores,provincias WHERE alumnos.tutor=tutores.dnitutor AND provincias.codprov=alumnos.provinciaalu AND alumnos.sexoalu='$s' AND alumnos.provinciaalu='$prov'";
                        $result2=mysqli_query($enlace, $datos);

                        $filas=mysqli_num_rows($result2);

                        $nomape="SELECT * FROM alumnos,tutores,provincias WHERE alumnos.tutor=tutores.dnitutor AND provincias.codprov=alumnos.provinciaalu";
                        $result3=mysqli_query($enlace, $nomape);
                        $registro2=mysqli_fetch_array($result3);
        ?>

        <?php
        if($filas == 0)
        {
                echo "<h1 align='center'>No hay " . $registro2['sexoalu'] . ' de provincia ' . $registro2['nomprov'] . "</h1>";
        }
        else
        {
        ?>
        <table align="center" width="500" border="1px">
                        <h1 align="center"><?php echo "Sexo: " . $registro2['sexoalu'];?></h1>
                        <h1 align="center"><?php echo "Provincia: " . $registro2['nomprov'];?></h1>
                <tr>
                        <td align="center">Expendiente</td>
                        <td align="center">DNI</td>
                        <td align="center" colspan="2">Alumno/a</td>
                        <td align="center">Direccion</td>
                        <td align="center" colspan="2">Provincia</td>
                        <td align="center">Telefono</td>
                        <td align="center">Sexo</td>
                        <td align="center" colspan="2">Tutor/a</td>
                </tr>
                <?php           
                while ($registro1=mysqli_fetch_array($result2))
                {
                ?>      <tr>
                                <td><?php echo $registro1['numexpalu'];?></td>
                                <td><?php echo $registro1['dnialu'];?></td>
                                <td><?php echo $registro1['nombrealu'];?></td>
                                <td><?php echo $registro1['apealu'];?></td>
                                <td><?php echo $registro1['direccionalu'];?></td>
                                <td><?php echo $registro1['provinciaalu'];?></td>
                                <td><?php echo $registro1['nomprov'];?></td>
                                <td><?php echo $registro1['telefonoalu'];?></td>
                                <td><?php echo $registro1['sexoalu'];?></td>
                                <td><?php echo $registro1['nombretutor'];?></td>
                                <td><?php echo $registro1['apetutor'];?></td>
                        </tr>
                <?php
                }
                ?>
                </table>
        <?php                        
        }
        ?>
        <br>
                <button><a href="formmuestraalumnado6.php">Volver</a></button>    
        </body>
</html>