<?php 
 require_once("settings.php");
 // funciones necesarias para iniciar sesión, destruir sesión, verificar si
 // el usuario tiene la sesión iniciada

 // FUNCIONES DE ACCESO AL SISTEMA
 // traigo los datos recibidos por HTTP POST
 // y retorno el HASH MD5 de ambos

 function get_post_data(){
 	$hash = "";
 	if(isset($_POST['usuario']) && isset($_POST['pass'])){
 		$hash = $_POST['usuario'] . $_POST['pass'];
 		
 	}
 	return $hash;
 } 

  // comparar hash creado: get_post_data, con el almacenado

 function validar_user_y_pass(){
 	
 	$user_hash = get_post_data();
 	$system_hash = HASH_ACCESO;

 	if($user_hash == $system_hash){
 		return True;
 	}
 }

 /*
	Esta será la función principal, que será llamada tras enviar
	el formulario. Si los datos ingresados coinciden con los esperados,
	inicio la sesión del usuario.
	Finalmente, redirijo al usuario a la página restringida por defecto
	(posteriormente crearemos una función que se encargue de ello)

 
 */
 // acá se genera una variable de sesión llamada login_date
 // cuyo valor es la marca de tiempo actual 
 function login(){
 	$user_valido = validar_user_y_pass();
 	if($user_valido){
 		$_SESSION['login_date'] = time();
 		}
 	goto_page(PAGINA_RESTRINGIDA_POR_DEFECTO);
 }

 # Destruir sesión

 function logout(){
 	unset($_SESSION);
 	$datos_cookie = session_get_cookie_params();
 	setcookie(session_name(), NULL, time() - 999999, $datos_cookie["path"],
 				$datos_cookie["domain"], $datos_cookie["secure"],
 				$datos_cookie["httponly"]);
 	goto_page(PAGINA_LOGIN);			
 }

 // FUNCIONES PARA VERIFICACIÓN Y VALIDACIÓN DE SESIONES
 // Obtener los datos del ultimo acceso con variable login_date
 
 function obtener_ultimo_acceso(){
 	$ultimo_acceso = 0;
 	if(isset($_SESSION['login_date'])){
 		$ultimo_acceso = $_SESSION['login_date'];
 	}
 	return $ultimo_acceso;
 }

 // VERIFICAR EL TIEMPO DE INACTIVIDAD DE LA SESION Y ACTUALIZARLO
 // Sesión activa -> true
 // sesión inactiva -> false
 // actualiza la variable de sesión
 // login_date, cuando la sesión este activa

 function sesion_activa(){
 	$estado_activo = False;
 	$ultimo_acceso = obtener_ultimo_acceso();

 	// limite máximo de inactividad, media hora 1800 segundos
 	// sumando 1800 a login_date nos da la marca de tiempo más 
 	// alta, que se permite la sesión activa.

 	$limite_ultimo_acceso = $ultimo_acceso + 1800;

 	// Ahora comparamos. si ultimo_acceso es mayor que la marca 
 	// de hora actual, sesión sigue activa. Actualizo la marca de tiempo
 	// renovando sesión

 	if ($limite_ultimo_acceso > time()) {
 		 $estado_activo = True;
 		 # actualizo la marca de tiempo renonvando la sesión
 		 $_SESSION['login_date'] = time();
 	}
 	return $estado_activo;
 }

 # VERIFICA SESION

 // Esta función, será la que invocaremos desde todas las páginas
 // a las cuales querramos restringir su acceso

 function validar_sesion(){
 	if(!sesion_activa()){
 		logout();
 	}
 }

 # FUNCION QUE REDIRIGE A LOS USUARIOS

 function goto_page($pagina){
 	header("Location: $pagina");
 }

 ?>