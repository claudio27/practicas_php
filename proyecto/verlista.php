<?php 
	// respuesta peticion
	// echo "datos del correo";
// otra llamada a la sesion, para reactivarla
session_start();

if(isset($_GET['correo']))
{

$arreglo = $_SESSION['productos'];
$cant = count($arreglo);
echo("<h4 class=\"text-center text-capitalize\">La cantidad de productos en su carro son $cant </h4>");

imprime_productos($arreglo);
// $str = productos_str($arreglo);
// echo($str);

}

function imprime_productos($arr = array())
{
	echo "<div class=\"container\"> ";
	echo "<div class=\"row\"> ";
		foreach ($arr as $key => $value) {
			echo "<div class=\"col-md-4\"> ";
			//echo "<hr><br>";
		
				foreach ($value as $clave => $valor) {
					echo $clave ." - ". $valor ."<br>"; 
				}
			echo "</div> ";
		}
	echo "</div> ";
	echo "</div> ";
}
// Representacion en string del arreglo, pensado para un textbox
function productos_str($arr = array())
{
	$cadena = "";

	foreach ($arr as $key => $value) {
	
		$cadena .= "\n";
	
			foreach ($value as $clave => $valor) {
				$cadena .= $clave ." -- ". $valor ."\n"; 
			}
	}

	return $cadena;

}

 ?>