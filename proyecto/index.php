<?php 
	
	include('bd-model.php');
	include('views.php');
	include('carro.php');

		
	$bd = new BD();
	$resultado = $bd->consulta_todos();
	$rows = $bd->recupera_datos($resultado);

	$carro = new Carro();

	$vista = new Vista();
	$vista->render($rows);

		
	handler();

	function handler(){
			global $bd;
			global $carro;
			global $vista;

			if(!empty($_GET['producto']))
			{

				$producto = $_GET['producto'];

				$out = $bd->recupera_por_id($producto);

				$carro->agregar($out);
				// debuger
				// print_r($_SESSION['productos']);
			}
			else if(!empty($_GET['eliminar']) && $_GET['eliminar'] == 1)
			{
					$carro->destruye_sesion();
			}
			else if(!empty($_GET['correo']))
			{
				$vista->render_correo($_SESSION['productos']);
			}

	}



 ?>

 
