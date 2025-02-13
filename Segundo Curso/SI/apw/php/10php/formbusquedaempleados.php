<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "empleados";
$enlace = mysqli_connect($servidor, $usuario, $contrasena);

mysqli_select_db($enlace, $basedatos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Buscar</title>
</head>
<body>
    <h1 align="center">INSERTAR EMPLEADO</h1>
    <form action="buscaempleado.php" align="center" name="formulario">
        Provincia: <select name="provincias">
            <option value="0">Cualquiera</option>
            <?php
            $seleccion = "SELECT * FROM provincias";
            $result=mysqli_query($enlace, $seleccion);

            while($fila = mysqli_fetch_array($result))
            { ?>
                <option value="<?php echo $fila['idprov']; ?>">
                    <?php echo $fila['nomprov']; ?>
                </option>
            <?php
            }
            ?>
        </select><br><br>
        <input type="submit" value="Buscar"><br>
        <a href="menu.html">Menu principal</a>
    </form>
</body>
</html>