<?php
$server="localhost";
$user="root";
$password="";
$enlace=mysqli_connect($server, $user, $password);

$bbdd="cots3";
mysqli_select_db($enlace, $bbdd);

$consulta="SELECT nombretutor, apetutor, telefonotutor
FROM tutores";
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
                <h1>Listado de tutores</h1>
                <table border="1px">
                        <tr><th>Nombre</th><th>Apellido</th><th>Telefono</th></tr>
                <?php
                while ($registro1=mysqli_fetch_array($result))
                        {
                        ?><tr>
                        <td><?php echo $registro1['nombretutor'];?></td>
                        <td><?php echo $registro1['apetutor'];?></td>
                        <td><?php echo $registro1['telefonotutor'];?></td>
                        </tr>
                                <?php
                        }
                                ?>
                </table><br>
                <button><a href="menu.html">Volver</a></button>
        </body>
</html>