<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "cursosformacion22";
$enlace = mysqli_connect($servidor, $usuario, $contrasena);

mysqli_select_db($enlace, $basedatos);

$personal=$_GET['personal'];

$seleccion = "SELECT * from personal WHERE num_personal='$personal'";
$result = mysqli_query($enlace, $seleccion);
$filapersonal = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>
<body>
    <form action="actualizasueldo22.php" name="formulario" align="center">
    Empleado: <input type="text" name="empleado" value="<?php echo $filapersonal['num_personal']; ?>"><br><br>
    Sueldo: <input type="text" name="sueldo" value="<?php echo $filapersonal['sueldo']; ?>"><br><br>
    <input type="submit" value="Actualizar">
    </form>
</body>
</html>