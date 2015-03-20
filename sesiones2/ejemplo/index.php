<?php 
// RESTRINGIR EL ACCESO A CIERTAS PÁGINAS

$user = "claudio";
$pass	= "hola";

echo md5($user . $pass);

 ?>
<html>
<meta charset="utf-8">
<head>
	<title>Sistema de sesiones</title>
</head>
<body>

 <h1>Ingreso al sistema</h1>
<form method="POST" action="iniciar.php">
	<label for="user">Usuario : </label>
	<input type="text" id="user" name="usuario">
	<label for="pass">Clave : </label>
	<input type="password" id="pass" name="pass">
	<input type="submit" value="Ingresar">
</form>


</body>
</html>