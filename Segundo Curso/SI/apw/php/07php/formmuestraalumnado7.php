<?php
include "config.php";

mysqli_select_db($enlace,$basedatos);
?>
<html>
        <head>
                <title>Desplegable</title>
                <meta charset="UTF-8">
                <script>
                function validar()
                        {
                        var error = "";
                        var bandera = 0;
                        if(document.formulario.sexo.value=="")
                        {
                                error = error + "Sexo\n";
                                bandera=1;
                        }
                        if(document.formulario.provincias.value=="0")
                        {
                                error = error + "Provincias\n";
                                bandera=1;
                        }
                        if(document.formulario.tutores.value=="0")
                        {
                                error = error + "Tutores";
                                bandera=1;
                        }

                        if(bandera==1)
                        {
                                alert("Tienes errores en\n"+error);
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
                <form action="muestraalumnado7.php" name="formulario" onsubmit="return validar()" align="center">
                <label for="sexo">Sexo del alumnado</label><br>
                <label><input type="radio" name="sexo" value="H">Hombre</label><br>
                <label><input type="radio" name="sexo" value="M">Mujer</label><br><br>


                <label for="provincias">Provincias</label><br>
                <select name="provincias">
                <option value="0">Seleccione provincia</option>
                <?php
                $seleccion="SELECT * FROM provincias";
                $result=mysqli_query($enlace,$seleccion);
                        while($filatutor=mysqli_fetch_array($result))
                        {?>
                                <option value="<?php echo $filatutor['codprov']; ?>">
                                        <?php echo $filatutor['nomprov']?>
                                </option>
                        <?php
                        }
                        ?>
                </select><br><br>

                <label for="tutores">Tutores</label><br>
                <select name="tutores">
                <option value="0">Seleccione tutor</option>
                <?php
                $seleccion="SELECT * FROM tutores";
                $result=mysqli_query($enlace,$seleccion);
                        while($filatutor=mysqli_fetch_array($result))
                        {?>
                                <option value="<?php echo $filatutor['dnitutor']; ?>">
                                        <?php echo $filatutor['nombretutor'] . " " . $filatutor['apetutor']; ?>
                                </option>
                        <?php
                        }
                        ?>
                </select><br><br>
                        <input type="submit">
                </form>
        </body>
</html>