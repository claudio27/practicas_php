<html>
<head>
	<title>prueba de sesiones php</title>
</head>
<body>
	<p>Las sesiones php se guardan en el servidor. Cada vez que el navegador quiere acceder
		a una le envía una cookie con una clave única para identificar qué navegador está haciendo la petición</p>

		<form action="pagina2.php" method="post">
			<input type="text" name="nombre">
			<input type="password" name="pass">
		 	<input type="submit" value="Enviar">
		</form>

</body>
</html>