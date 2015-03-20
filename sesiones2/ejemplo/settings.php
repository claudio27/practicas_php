<?php 

	// almacena variables y constantes del entorno global

	# Dejar iniciada la sesión
	session_start();

	# poner el hash MD5 de acceso, es como la base de datos
	const HASH_ACCESO = "c5c923bdd2b78307a57f823b4fb9b533";

	# formulario.html será el que pida el ingreso de ususario y contraseña
	const PAGINA_LOGIN = "formulario.html";

	# esta será una página cualquiera, con acceso restringido, a la cual
	# redirigir al usuario después de inciar su sesión en el sistema
	const PAGINA_RESTRINGIDA_POR_DEFECTO = "pagina_de_muestra.php";


 ?>