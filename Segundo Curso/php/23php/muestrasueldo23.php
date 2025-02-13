<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "cursosformacion23";
$enlace = mysqli_connect($servidor, $usuario, $contrasena);

mysqli_select_db($enlace, $basedatos);

$personal=$_GET['personal'];

$seleccion1 = "SELECT * FROM personal WHERE num_personal='$personal'";
$result1 = mysqli_query($enlace, $seleccion1);
$fila1=mysqli_fetch_array($result1);

function actualizar()
{
    $personal="";
    $seleccion1 = "SELECT * FROM personal WHERE num_personal='$personal'";
    $result1 = mysqli_query($enlace, $seleccion1);
    $fila1=mysqli_fetch_array($result1);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>
<body>
    <form action="actualizasueldo23.php" align="center">
    Empleado <select name="personal" onchange="actualizar()">
            <?php
            $seleccion = "SELECT * FROM personal";
            $result = mysqli_query($enlace, $seleccion);

            while($fila=mysqli_fetch_array($result))
            {
            if($fila['num_personal']==$fila1['num_personal'])
            {
            ?>
                <option value="<?php echo $fila['num_personal']; ?>" selected>
                    <?php echo $fila['nombre'] . ' ' . $fila['apellido']; ?>
                </option>   
            <?php          
            }
            else
            {
            ?>
                <option value="<?php echo $fila['num_personal']; ?>">
                    <?php echo $fila['nombre'] . ' ' . $fila['apellido']; ?>
                </option>
            <?php
            }
            }
            ?>
        </select><br><br>
        Indique nuevo saldo <input type="text" name="sueldo" value="<?php echo $fila1['sueldo']; ?>"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>