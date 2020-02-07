<?php
require_once('conexion.php');
if (isset($_POST['enviar'])) {
	
	$user = $_POST['usuario'];
	$pass = $_POST['pass'];

	$consulta = select nombre,pass from wordpress.usuarios where nombre = '$user' and pass = '$pass';

	$sql = mysqli_query($conn,$consulta)
		if ($sql == 1) {
			header(Location: 'index.php');
		}
		else{
			header(Location: 'login.php');
		}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method="post" action="login.php">
		<label>Usuario</label>
		<br>
		<input type="text" name="usuario">
		<br>
		<br>
		<label>Contraseña</label>
		<br>
		<input type="password" name="pass">

		<br>
		<br>
		<input type="submit" name="enviar" value="Enviar">
	</form>

</body>
</html>

