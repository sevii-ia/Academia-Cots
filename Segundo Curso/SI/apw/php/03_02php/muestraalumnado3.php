<?php
$server="localhost";
$user="root";
$password="";
$enlace=mysqli_connect($server, $user, $password);

$basedatos="centroformacion03";
mysqli_select_db($enlace, $basedatos);

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
                        $datos="SELECT * FROM alumnos,tutores WHERE alumnos.tutor=tutores.dnitutor AND alumnos.tutor='$tut'";
                        $result2=mysqli_query($enlace, $datos);

                        $filas=mysqli_num_rows($result2);

                        $nomape="SELECT tutores.nombretutor,tutores.apetutor FROM tutores WHERE dnitutor='$tut'";
                        $result3=mysqli_query($enlace, $nomape);
                        $registro2=mysqli_fetch_array($result3);
        ?>

        <?php
        if($filas == 0)
        {
                echo "<h1 align='center'>NO HAY REGISTROS DEL TUTOR: " . $registro2['nombretutor'] . ' ' . $registro2['apetutor'] . "</h1>";
        }
        else
        {
        ?>
        <table align="center" width="500" border="1px">
                        <h1 align="center"><?php echo $registro2['nombretutor'] . " " . $registro2['apetutor'];?></h1>
                <tr>
                        <td align="center">Expediente</td>
                        <td align="center">DNI Alumno</td>
                        <td align="center">Nombre</td>
                        <td align="center">Apellidos</td>
                        <td align="center">Direccion</td>
                        <td align="center">Provincia</td>
                        <td align="center">Telefono</td>
                        <td align="center" colspan="3">Tutor</td>
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
                                <td><?php echo $registro1['telefonoalu'];?></td>
                                <td><?php echo $registro1['tutor'];?></td>
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
                <button><a href="formmuestraalumnado3.php">Volver</a></button>    
        </body>
</html>