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
    <title>Formulario Insertar</title>
    <script>
        var error="";
        var bandera=0;
        function validar()
        {
            if(document.formulario.dni.value=="")
            {
                error = error + "DNI\n";
                bandera = 1;
            }
            if(document.formulario.nombre.value=="")
            {
                error = error + "Nombre\n";
                bandera = 1;
            }
            if(document.formulario.apellidos.value=="")
            {
                error = error + "Apellidos\n";
                bandera = 1;
            }
            if(document.formulario.domicilio.value=="")
            {
                error = error + "Domicilio\n";
                bandera = 1;
            }
            if(document.formulario.municipio.value=="")
            {
                error = error + "Municipio\n";
                bandera = 1;
            }
            if(document.formulario.provincias.value==0)
            {
                error = error + "Provincias\n";
                bandera = 1;
            }
            if(document.formulario.sexo.value=="")
            {
                error = error + "Sexo";
                bandera = 1;
            }

            if(bandera==1)
            {
                alert("Tienes errores en:\n"+error);
                return false;
            }
            else
            {
                return true;
            }
        }
    </script>
</head>
<body>
    <h1 align="center">INSERTAR EMPLEADO</h1>
    <form action="insertaempleados.php" align="center" name="formulario" onsubmit="return validar()">
        DNI <input type="text" name="dni"><br><br>
        Nombre <input type="text" name="nombre"><br><br>
        Apellidos <input type="text" name="apellidos"><br><br>
        Domicilio <input type="text" name="domicilio"><br><br>
        Municipio <input type="text" name="municipio"><br><br>
        Provincia: <select name="provincias">
            <option value="0">Seleccione provincia</option>
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
        Sexo:<br>
        <input type="radio" name="sexo" value="H">Hombre<br>
        <input type="radio" name="sexo" value="M">Mujer<br><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Restablecer"><br>
        <a href="menu.html">Menu principal</a>
    </form>
</body>
</html>