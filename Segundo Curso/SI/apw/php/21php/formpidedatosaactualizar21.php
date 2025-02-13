<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "cursosformacion21";
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
    <h1 align="center">Modificacion de Salario</h1>
    <form action="actualizadatos21.php" name="formulario" align="center">
    Empleado/a <select name="empleado">
        <option value="0">Seleccione empleado/a...</option>
            <?php
            $seleccion = "SELECT * FROM personal";
            $result = mysqli_query($enlace, $seleccion);

            while($filatutor=mysqli_fetch_array($result))
            {?>
                <option value="<?php echo $filatutor['num_personal']; ?>">
                    <?php echo $filatutor['nombre'] . " " . $filatutor['apellido']; ?>
                </option>
            <?php
            }
            ?>
        </select><br><br>

        <label for="sueldo">Indique nuevo sueldo: <input type="text" name="sueldo"> € mensuales.</label><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>