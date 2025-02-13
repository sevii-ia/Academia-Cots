<?php
$server="localhost";
$user="root";
$password="";
$enlace=mysqli_connect($server, $user, $password);

$basedatos="centroformacion06";
mysqli_select_db($enlace, $basedatos);
?>
<html>
        <head>
                <title>DESPLEGABLE</title>
                <meta charset="UTF-8">
                <link rel="shortcut icon" href="../../favicon.ico"/>
                <script>
                        function validar()
                        {
                                var error = "";
                                var bandera=0;
                                if(document.formulario.sexo.value=="")
                                {
                                        error = error+"Sexo\n";
                                        bandera=1;
                                }
                                if(document.formulario.provincias.value=="error")
                                {
                                        error = error+"Provincias";
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
	<form name="formulario" action="muestraalumnado6.php" onSubmit="return validar()" method="get">
                <table align="center">
			<tr>
				<td align="center">Selecciona el sexo del alumnado</td>
			</tr>
				<td><input type="radio" name="sexo" value="H" />Masculino<td>
			<tr>
			</tr>
				<td><input type="radio" name="sexo" value="M" />Femenino<td>

                        <tr>
                                <td>Provincia</td></tr>
                        <tr><td><select name="provincias">
                        <option value="error">Seleccione provincia</option>
                        <?php
                        $seleccion1="SELECT * FROM provincias";
                        $result1=mysqli_query($enlace, $seleccion1);

                        while($filaprovincia=mysqli_fetch_array($result1))
                        {?>
                                <option value="<?php echo $filaprovincia['codprov']; ?>">
                                        <?php echo $filaprovincia['nomprov']; ?>
                                </option>
                        <?php
                        }
                        ?>
                        </select>
                        </td></tr>

                        <tr>
				<td align="center"><input type="submit" name="enviar" value="ENVIAR" /></td>
			</tr>
		</table>
	</form>
</body>
</html>