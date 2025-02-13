<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "cursosformacion23";
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
    <form action="muestrasueldo23.php" align="center">
        <h1>Modificacion de Salario</h1>
        Empleado <select name="personal">
            <?php
            $seleccion = "SELECT * FROM personal";
            $result = mysqli_query($enlace, $seleccion);

            while($fila=mysqli_fetch_array($result))
            {?>
                <option value="<?php echo $fila['num_personal']; ?>">
                    <?php echo $fila['nombre'] . ' ' . $fila['apellido']; ?>
                </option>
            <?php
            }
            ?>
        </select><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>