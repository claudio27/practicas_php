<?php
	session_start();
	$_SESSION['usuario'] = $_REQUEST['nombre'];
	$_SESSION['password'] = $_REQUEST['pass'];

?>
<html>
<head>
	<title>Variables session</title>
</head>
<body>
<p>Se han guardado las variables de sesión</p>

<a href="pagina3.php">Ir a la siguiente página donde se muestra el valor de las variables de sesión</a>
</body>
</html>