<?php
$server="localhost";
$user="root";
$password="";
$enlace=mysqli_connect($server, $user, $password);

$basedatos="centroformacion02";
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
	<h3 align="center">ALTA ALUMNOS</h3>
	<form name="formulario" action="insertaalumnos.php" onSubmit="return validar()" method="get">
		<table align="center">
				<tr>
                                        <td>Expediente</td></tr><tr><td><input type="text" name="expediente" maxlength="10" size="10"/></td>
                                </tr>
				<tr>
                                        <td>DNI Alumno</td></tr><tr><td><input type="text" name="dni" maxlength="12" size="12"/></td>
                                </tr>
				<tr>
                                        <td>Nombre</td></tr><tr><td><input type="text" name="nombre" maxlength="25" size="25"/></td>
                                </tr>
				<tr>
                                        <td>Apellidos</td></tr><tr><td><input type="text" name="apellidos" maxlength="25" size="25"/></td>
                                </tr>
				<tr>
                                        <td>Direccion</td></tr><tr><td><input type="text" name="direccion" maxlength="50" size="50"/></td>
                                </tr>
				<tr>
                                        <td>Provincia</td></tr><tr><td><input type="text" name="provincia" maxlength="25" size="25"/></td>
                                </tr>
				<tr>
                                        <td>Telefono</td></tr><tr><td><input type="text" name="telefono" maxlength="15" size="15"/></td>
                                </tr>
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