<?php 

	# ESTA PAGINA ES DE LAS RESTRINGIDAS PARA CUALQUIER USUARIO
	# DEBE TENER UNA LLAMADA a validar_sesion()
	# (El contenido de estas páginas sólo será visible al usuario
	# si tiene la sesión iniciada y activa.)
	# De lo contrario, el contenido estará seguro y no será 
	# mostrado a usuarios sin sesión iniciada o con sesión inactiva
 

 require_once("funciones.php");

 validar_sesion();
 ?>

 <html>
 <meta charset="utf-8">
 <head>
 	<title>¡Bienvenido usuario registrado!</title>
 </head>
 <body>
 	<h1>¡Bienvenido usuario registrado!</h1>
 	<a href="salir.php">Desconectarse.</a>
 
 </body>
 </html>