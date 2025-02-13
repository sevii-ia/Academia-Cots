<?php
$server="localhost";
$user="root";
$password="";
$enlace=mysqli_connect($server, $user, $password);

$basedatos="centroformacion04";
mysqli_select_db($enlace, $basedatos);

$prov=$_GET['provincias'];
$tut=$_GET['tutores'];

?>
<html>
        <head>
                <title>Conectar a servidor</title>
                <meta charset="UTF-8">
                <link rel="shortcut icon" href="../../favicon.ico"/>
        </head>
        <body>
        <?php
                        $datos="SELECT * FROM alumnos,tutores,provincias WHERE alumnos.tutor=tutores.dnitutor AND provincias.codprov=alumnos.provinciaalu AND alumnos.tutor='$tut' AND alumnos.provinciaalu='$prov'";
                        $result2=mysqli_query($enlace, $datos);

                        $filas=mysqli_num_rows($result2);

                        $nomape="SELECT * FROM alumnos,tutores,provincias WHERE alumnos.tutor=tutores.dnitutor AND provincias.codprov=alumnos.provinciaalu";
                        $result3=mysqli_query($enlace, $nomape);
                        $registro2=mysqli_fetch_array($result3);
        ?>

        <?php
        if($filas == 0)
        {
                echo "<h1 align='center'>El tutor/a " . $registro2['nombretutor'] . ' ' . $registro2['apetutor'] . ' no tiene alumnado de la provincia ' . $registro2['nomprov'] . "</h1>";
        }
        else
        {
        ?>
        <table align="center" width="500" border="1px">
                        <h1 align="center"><?php echo "Tutor/a: : " . $registro2['nombretutor'] . " " . $registro2['apetutor'];?></h1>
                        <h1 align="center"><?php echo "Provincia: " . $registro2['nomprov'];?></h1>
                <tr>
                        <td align="center">NumExp</td>
                        <td align="center">DNI</td>
                        <td align="center">Nombre</td>
                        <td align="center">Apellidos</td>
                        <td align="center">Telefono</td>
                        <td align="center">Direccion</td>
                </tr>
                <?php           
                while ($registro1=mysqli_fetch_array($result2))
                {
                ?>      <tr>
                                <td><?php echo $registro1['numexpalu'];?></td>
                                <td><?php echo $registro1['dnialu'];?></td>
                                <td><?php echo $registro1['nombrealu'];?></td>
                                <td><?php echo $registro1['apealu'];?></td>
                                <td><?php echo $registro1['telefonoalu'];?></td>
                                <td><?php echo $registro1['direccionalu'];?></td>
                        </tr>
                <?php
                }
                ?>
                </table>
        <?php                        
        }
        ?>
        <br>
                <button><a href="formmuestraalumnado4.php">Volver</a></button>    
        </body>
</html>