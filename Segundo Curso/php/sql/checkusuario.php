<?php
//' OR '1'='1
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "personal";
$enlace = mysqli_connect($servidor, $usuario, $contrasena);

$user = $_GET['usuario'];
$password = $_GET['password'];

mysqli_select_db($enlace, $basedatos);

$seleccion = "SELECT * FROM empleados WHERE usuario='$user' AND password='$password'";
$result = mysqli_query($enlace, $seleccion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <?php
    if(mysqli_num_rows($result)>=1)
    {?>
        <table border="1">

            <tr>
                <td colspan="2">Datos de Usuario y Password</td>
            </tr>
            <?php
            while ($datos=mysqli_fetch_array($result))
            {
            ?>
            <tr>
                <td><?php echo $datos['usuario'];?></td>
                <td><?php echo $datos['password'];?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    <?php
    }
    else
    {
        echo "<h1>REVISE USUARIO O CONTRASENA</h1>";
    }
    ?>
</body>
</html>