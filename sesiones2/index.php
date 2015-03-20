<?php
/*
	SESIONES

	Antes de trabajar con sesiones deben ser inicializadas
	session_start(), siempre debe ser llamada antes de cualquier
	operación realizada con sesiones

	array super global $_SESSION
*/

// php genera un identificador único de sesión de usuario.
// sirve para identificar en cada sesión al usuario de manera
// inequívoca, se accede con session_id()

session_start();

echo session_id() . chr(10);

// para iniciar una nueva sesión como para reanudar una existente
// siempre debe hacerse con session_start().
// con $_SESSION, se puede crear, leer y modificar la sesión, de forma simple y directa


$_SESSION['usuario'] = 'claudio27'; // creo la sesión 'usuario'


//	LEER UNA SESIÓN, obtener el ID de sesión

echo $_SESSION['usuario'] . chr(10);

// MODIFICAR LA SESIÓN
session_id('nuevoNombreID');
echo session_id() . chr(10); 

// si se quiere modificar cualquier variable de sesión, creada por nosotros,
// bastará con modificar el array superglobal $_SESSION.

$_SESSION['usuario'] =  'claudio1987';
echo $_SESSION['usuario'] . chr(10);
echo session_id() . chr(10);

// ELIMINAR UNA VARIABLE DE SESIÓN
print_r($_SESSION['usuario']);
unset($_SESSION['usuario']);

// ELIMINAR SESIÓN COMPLETA
// destruir sesión completa del usuario, incluyendo ID de sesión
// session_destroy() y eliminar la cookie con el nombre de la sesión
// se obtiene mediante session_name()

echo "<br>";
echo session_name();

echo "<br>";

// session_start(); // reanuda la sesión
// unset($_SESSION); // destruye todas las variables de sesión
// != de unset($_SESSION[usuario]);

// obtener los parámetros de la cookie de sesión
// necesarios para la destrucción
// $datos_cookie = session_get_cookie_params();
// sobreescribir la cookie de sesión -destruirla-
// setcookie(session_name(), NULL, time() - 999999, $datos_cookie["path"],
//		 $datos_cookie["domain"], $datos_cookie["secure"],$datos_cookie["httponly"]);

// session_destroy(); // destruyo la sesión		  

// elimino todas las variables de sesión
unset($_SESSION);
// obtener datos de la cookie de sesión
$datos_cookie = session_get_cookie_params();
// elimino la cookie
setcookie(session_name(), NULL, time() - 999999, $datos_cookie["path"],
		 $datos_cookie["domain"], $datos_cookie["secure"],$datos_cookie["httponly"]);
// destruir la sesión
session_destroy();
echo "La sesión ha Xp <br>";

?>
