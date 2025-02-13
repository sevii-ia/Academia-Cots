<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
    <script>
        /*function validar()
        {
            var error="";
            var bandera=0;
            if(document.formulario.zona.value==0)
            {
                error = error + "Zona\n";
                bandera=1;
            }
            if(document.formulario.ano.value=="")
            {
                error = error + "Año";
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
        onsubmit="return validar()"
        */

        function desactivo() {
            var cajatodo = document.getElementById("todo");
            var zona = document.getElementById("zona");
            var ano = document.getElementById("ano");

            if (cajatodo.checked) {
                zona.disabled = true;
                ano.disabled = true;
            } else {
                zona.disabled = false;
                ano.disabled = false;
            }
        }
    </script>
</head>
<body>
    <h1 align="center">BUSQUEDA DE VIVIENDAS</h1>
    <form action="buscavivienda.php" name="formulario" align="center">
        Zona <select name="zona" id="zona">
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
        <label for="ano">Año <input type="text" name="ano" id="ano"></label><br><br>
        <input type="submit" value="Enviar"><br><br>
        Todo <input type="checkbox" id="todo" name="todo" onclick="desactivo();"><br><br>
        <a href="menu.html">Menu principal</a>
    </form>
</body>
</html>