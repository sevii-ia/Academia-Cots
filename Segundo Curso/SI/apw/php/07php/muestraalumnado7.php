<?php
include "config.php";

mysqli_select_db($enlace,$basedatos);

$sexo = $_GET['sexo'];
$prov = $_GET['provincias'];
$tutor = $_GET['tutores'];

$seleccion1="SELECT nombretutor,apetutor FROM tutores WHERE dnitutor='$tutor'";
$result1=mysqli_query($enlace,$seleccion1);
$nombres=mysqli_fetch_array($result1);

$seleccion2="SELECT nomprov FROM provincias WHERE codprov='$prov'";
$result2=mysqli_query($enlace,$seleccion2);
$provincia=mysqli_fetch_array($result2);
?>
<html>
        <head>
                <title>Tabla</title>
                <meta charset="UTF-8">
        </head>
        <body>
        <?php
        if(mysqli_num_rows($result1) == 0)
        {
                echo "<h1>No hay datos</h1>";
        }
        else
        {
                if($sexo == "H")
                {
                        $sexotitulo = "HOMBRE";
                }
                else
                {
                        $sexotitulo = "MUJER";
                }        
        ?>
        <h3>TUTOR/A: <?php echo $nombres['nombretutor'] . " " . $nombres['apetutor']?></h3>
        <h3>PROVINCIA: <?php echo $provincia['nomprov']?></h3>
        <h3>SEXO: <?php echo $sexotitulo?></h3>

                <h1 align="center">Listado de alumnado</h1>
                <table align="center" border="1px">
                <tr>
                        <td>Expediente</td>
                        <td>DNI</td>
                        <td colspan="2">Alumno/a</td>
                        <td>Telefono</td>
                </tr>
                <tr>
                <?php
                $seleccion="SELECT * FROM alumnos,tutores,provincias WHERE alumnos.tutor=tutores.dnitutor 
                AND alumnos.provinciaalu=provincias.codprov AND sexoalu='$sexo' AND codprov='$prov' AND tutor='$tutor'";
                $result=mysqli_query($enlace,$seleccion);
                        while($filatutor=mysqli_fetch_array($result))
                        {?>
                                <td><?php echo $filatutor['numexpalu']?></td>
                                <td><?php echo $filatutor['dnialu']?></td>
                                <td><?php echo $filatutor['nombrealu']?></td>
                                <td><?php echo $filatutor['apealu']?></td>
                                <td><?php echo $filatutor['telefonoalu']?></td>
                        <?php
                        }
                        ?>
                </tr>
                </table>
        <?php
        }
        ?>
        <button><a href="formmuestraalumnado7.php">Volver</a></button>
        </body>
</html>