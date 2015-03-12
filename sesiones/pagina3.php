<?php
	session_start();
?>
<html>
<head>
	<title>Mostrando las variables</title>
</head>
<body>
<p>Mostrando las variables</p>
<p>Valor de usuario : <?=$_SESSION['usuario']?></p>
<p>Valor de la contraseña : <?=$_SESSION['password']?></p>

</body>
</html>