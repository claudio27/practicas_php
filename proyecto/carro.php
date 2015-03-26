<?php 
	
	session_start();

	class Carro{

	//private $carro = array();

	public function __construct(){

		if(!isset($_SESSION['productos']))
		{
			$_SESSION['cantidad'] = 0;
			
		}
	}


	function agregar($x = array()){
		
			$_SESSION['productos'][] = $x; 
			
			$_SESSION['cantidad'] += 1;	
	}


	function destruye_sesion(){
		// destruye todas las variables de sesión creadas
		unset($_SESSION);
		// parámetros cookie de sesión
		$datos_cookie = session_get_cookie_params();
		// sobreescribo los valores, se destruye la cookie
		setcookie(session_name(), NULL, time() - 999999, $datos_cookie["path"],
				 $datos_cookie["domain"], $datos_cookie["secure"], $datos_cookie["httponly"]);
		session_destroy();
	}

	


	}

 ?>