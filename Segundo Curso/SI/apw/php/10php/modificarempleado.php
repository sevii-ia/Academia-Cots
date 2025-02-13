<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "empleados";
$enlace = mysqli_connect($servidor, $usuario, $contrasena);

mysqli_select_db($enlace, $basedatos);

$dni=$_GET['dni'];

$seleccion = "SELECT * FROM empleados WHERE dni='$dni'";
$result=mysqli_query($enlace, $seleccion);
$fila = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <h1 align="center">MODIFIQUE LOS DATOS DEL EMPLEADO</h1>
    <form action="actualizardatos.php" align="center" name="formulario">
        DNI <input type="text" name="dni" value="<?php echo $fila['dni']; ?>"><br><br>
        Nombre <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"><br><br>
        Apellidos <input type="text" name="apellidos" value="<?php echo $fila['apellidos']; ?>"><br><br>
        Domicilio <input type="text" name="domicilio" value="<?php echo $fila['domicilio']; ?>"><br><br>
        Municipio <input type="text" name="municipio" value="<?php echo $fila['municipio']; ?>"><br><br>
        Provincia: <select name="provincias">
            <option value="0">Seleccione provincia</option>
            <?php
            $seleccion1 = "SELECT * FROM provincias";
            $result1=mysqli_query($enlace, $seleccion1);

            while($filaprovincia = mysqli_fetch_array($result1))
            { 
            if($fila['codprov']==$filaprovincia['idprov'])
            {
            ?>
                <option value="<?php echo $filaprovincia['idprov']; ?>" selected>
                    <?php echo $filaprovincia['nomprov']; ?>
                </option>
            <?php
            }
            else
            {
            ?>
                <option value="<?php echo $filaprovincia['idprov']; ?>">
                    <?php echo $filaprovincia['nomprov']; ?>
                </option>
                <?php
            }    
            }
            ?>
        </select><br><br>
        Sexo:<br>
        <?php
        if($fila['nomprov']="H")
        {?>
        <input type="radio" name="sexo" value="H" checked>Hombre<br>
        <input type="radio" name="sexo" value="M">Mujer<br><br>
        <?php
        }
        else
        {?>
            <input type="radio" name="sexo" value="H">Hombre<br>
            <input type="radio" name="sexo" value="M" checked>Mujer<br><br>  
        <?php          
        }
        ?>
        <input type="submit" value="Enviar"><br>
        <a href="menu.html">Menu principal</a>
    </form>
</body>
</html>