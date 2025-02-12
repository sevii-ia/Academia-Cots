<?php
include "config.php";
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
            var error="";
            var bandera=0;
            if(document.formulario.zona.value==0)
            {
                error = error + "Zona\n";
                bandera=1;
            }
            if(document.formulario.superficie.value=="")
            {
                error = error + "Superficie\n";
                bandera=1;
            }
            if(document.formulario.habitaciones.value=="")
            {
                error = error + "Habitaciones\n";
                bandera=1;
            }
            if(document.formulario.aseos.value=="")
            {
                error = error + "Aseos\n";
                bandera=1;
            }
            if(document.formulario.fecha.value=="")
            {
                error = error + "Fecha\n";
                bandera=1;
            }
            if(document.formulario.precio.value=="")
            {
                error = error + "Precio";
                bandera=1;
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
    <h1 align="center">ALTA VIVIENDAS</h1>
    <form action="insertavivienda.php" name="formulario" align="center" onsubmit="return validar()">
        Zona <select name="zona">
            <option value="0">Seleccione zona</option>
            <?php
            $seleccion = "SELECT * FROM zonas";
            $result = mysqli_query($enlace, $seleccion);

            while($filazona=mysqli_fetch_array($result))
            {?>
                <option value="<?php echo $filazona['idzona']; ?>">
                    <?php echo $filazona['nomzona']; ?>
                </option>
            <?php
            }
            ?>
        </select><br><br>
        <label for="superficie">Superficie <input type="text" name="superficie"></label><br><br>
        <label for="habitaciones">Habitaciones <input type="text" name="habitaciones"></label><br><br>
        <label for="aseos">Aseos <input type="text" name="aseos"></label><br><br>
        <label for="fecha">Fecha <input type="text" name="fecha"></label><br><br>
        <label for="precio">Precio <input type="text" name="precio"></label><br><br>
        <input type="submit" value="Enviar"><br>
        <a href="menu.html">Menu principal</a>
    </form>
</body>
</html>