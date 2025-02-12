<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "centroformacion08";
$enlace = mysqli_connect($servidor, $usuario, $contrasena);

mysqli_select_db($enlace, $basedatos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <script>
        function validar()
        {
            var error = "";
            var bandera = 0;
            if(document.formulario.expediente.value=="")
            {
                error = error + "Expediente\n";
                bandera = 1;
            }
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
            if(document.formulario.direccion.value=="")
            {
                error = error + "Direccion\n";
                bandera = 1;
            }
            if(document.formulario.provincias.value==0)
            {
                error = error + "Provincia\n";
                bandera = 1;
            }
            if(document.formulario.telefono.value=="")
            {
                error = error + "Telefono\n";
                bandera = 1;
            }
            if(document.formulario.sexo.value=="")
            {
                error = error + "Sexo\n";
                bandera = 1;
            }
            if(document.formulario.tutores.value==0)
            {
                error = error + "Tutor";
                bandera = 1; 
            }

            if(bandera==1)
            {
                alert("Tienes errores en:\n" + error);
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
    <h1 align="center">Alta alumno/a</h1>
    <form action="insertaalumnado08.php" align="center" name="formulario" onSubmit="return validar()">
        <label for="expediente">Expediente <input name="expediente" type="text"></label><br><br>
        <label for="dni">DNI <input name="dni" type="text"></label><br><br>
        <label for="nombre">Nombre <input name="nombre" type="text"></label><br><br>
        <label for="apellidos">Apellidos <input name="apellidos" type="text"></label><br><br>
        <label for="direccion">Direccion <input name="direccion" type="text"></label><br><br>

        <label for="provincias">Provincia 
            <select name="provincias">
            <option value="0">Seleccione Provincia</option>
            <?php
                $seleccion1 = "SELECT * FROM provincias";
                $result1 = mysqli_query($enlace, $seleccion1);

                while($filaprovincia=mysqli_fetch_array($result1))
                {?>
                    <option value="<?php echo $filaprovincia['codprov']; ?>">
                        <?php echo $filaprovincia['nomprov']; ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </label><br><br>

        <label for="telefono">Telefono <input name="telefono" type="text"></label><br><br>

        <label for="sexo">Sexo: <input type="radio" value="H" name="sexo">Hombre</label>
        <label for="sexo"><input type="radio" value="M" name="sexo">Mujer</label><br><br>

        <label for="tutores">Tutor/a 
            <select name="tutores">
            <option value="0">Seleccione Tutor/a</option>
            <?php
                $seleccion = "SELECT * FROM tutores";
                $result = mysqli_query($enlace, $seleccion);

                while($filatutor=mysqli_fetch_array($result))
                {?>
                    <option value="<?php echo $filatutor['dnitutor']; ?>">
                        <?php echo $filatutor['nombretutor'] . " " . $filatutor['apetutor']; ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </label><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>