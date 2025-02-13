<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "cursosformacion22";
$enlace = mysqli_connect($servidor, $usuario, $contrasena);

mysqli_select_db($enlace, $basedatos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="muestrasueldo22.php" name="formulario" align="center">
    <h1>Modificacion de Salario</h1>
    <select name="personal">
        <?php
        $seleccion = "SELECT * from personal";
        $result = mysqli_query($enlace, $seleccion);

        while($filapersonal = mysqli_fetch_array($result))
        {?>
            <option value="<?php echo $filapersonal['num_personal']; ?>">
                <?php echo $filapersonal['nombre'] . ' ' . $filapersonal['apellido']; ?>
            </option>
        <?php
        }
        ?>
    </select><br><br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>