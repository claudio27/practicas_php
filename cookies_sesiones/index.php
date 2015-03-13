<?php
/*	
		EJEMPLO DE COOKIES Y SESIONES

*/

$nombre = "nombre_y_apellido";
$valor = "Claudio Serrano";
$expira = time() + (3600 * 24 * 365); // 1 año
$dir = "/";
$dominio = ""; 
// si está localhost.com sólo válida en localhost.com y nada más
$https = FALSE;
$http = TRUE;

setcookie($nombre, $valor, $expira, $dir, $dominio, $https, $http);
setcookie("nombre_cookie", "otro nombre", time() + 3600);
// leer cookie
// usar el array superglobal $_COOKIE

echo "Hola {$_COOKIE["nombre"]}!"; // Hola Claudio Serrano

echo "<br>";

// Modificar una cookie
// sobreescribirla, volver a crearla
$nombre = "nombre_y_apellido";
$valor = "Anini lalala";
$expira = time() + (3600 * 24 * 365); // 1 año
$dir = "/";
$dominio = ""; 
$https = FALSE;
$http = TRUE;

setcookie($nombre, $valor, $expira, $dir, $dominio, $https, $http);


// ELIMINAR UNA COOKIE
// Volver a crear la cookie con valor NULL y haciendo que expire antes de la fecha actual

$nombre = "nombre_y_apellido";
$valor = "NULL";
$expira = time() - (3600 * 24 * 365); // para eliminar restar
$dir = "/";
$dominio = ""; 
$https = FALSE;
$http = TRUE;

setcookie($nombre, $valor, $expira, $dir, $dominio, $https, $http);



?>