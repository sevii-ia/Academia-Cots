<?php
$server="localhost";
$user="root";
$password="";
$enlace=mysqli_connect($server, $user, $password);

$basedatos="centroformacion03";
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
                                if(document.formulario.tutores.value=="error")
                                {
                                        alert("Error no se puede enviar formulario");
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
	<form name="formulario" action="muestraalumnado3.php" onSubmit="return validar()" method="get">
		<table align="center">
				<tr>
                                        <td>Tutor</td></tr>
                                <tr><td><select name="tutores">
                                <option value="error">Seleccione tutor</option>
                                <?php
                                $seleccion="SELECT * FROM tutores";
                                $result=mysqli_query($enlace, $seleccion);

                                while($filatutor=mysqli_fetch_array($result))
                                {?>
                                        <option value="<?php echo $filatutor['dnitutor']; ?>">
                                                <?php echo $filatutor['nombretutor']." ".$filatutor['apetutor']; ?>
                                        </option>
                                <?php
                                }
                                ?>
                                </select>
                                </td></tr>
                                <tr>
                                        <td colspan="2" align="center"><input type="submit" value="ENVIAR"/></td>
                                </tr>
		</table>
	</form>
</body>
</html>