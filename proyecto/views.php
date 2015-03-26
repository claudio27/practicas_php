<?php 
	
class Vista{
	function imprime_header(){

			$header = file_get_contents("view/header.php");
			
			//$header = str_replace("{cantidad}", $_SESSION['cantidad'], $header);
			echo $header;
	
	}

	function imprime_footer(){
		$footer = file_get_contents("view/footer.php");
		echo $footer;
	}

	function render($arr){
		$this->imprime_header();
		$this->imprime_resultado($arr);
		$this->imprime_footer();
	}

	function render_correo($arreglo = array())
	{
		$cantidad = count($arreglo);
		// print_r($arreglo);
		// echo("<h4>Los $cantidad productos que usted lleva son los siguientes: </h4><br>");
		//echo("HOLALALALALA");
		echo "HOLALALAL";
		// foreach ($arreglo as $key => $value) {
		// 	echo "<hr><br>";
		// 	foreach ($value as $clave => $valor) {
		// 		echo $clave ." - ". $valor ."<br>"; 
		// 	}
		// }
	}


	 function imprime_resultado($arr){
		
		echo "<div class=\"container\">";
		echo "<div class=\"row\">";
		
		foreach ($arr as $clave) {
				echo "<div class=\"col-sm-6 col-md-4\">";
				echo "<div class=\"thumbnail\" data-id=\"".$clave['id']."\">".
				"<h3 class=\"text-uppercase\" >".$clave['nombre']."</h3>"
				."<p class=\"lead\">".$clave['descripcion']."</p>"
				."<p>".$clave['codigo']."</p>"
				."<p> <span class=\"badge\">".$clave['stock']."</span></p>"
				."<p>".$clave['foto']."</p>"
				// ."<a class=\"btn btn-primary btn-sm\" href=\"?producto=".$clave['id']."\">+</a>"
				."<button class=\"btn btn-primary btn-sm\">+</button>"
				."</div>";
				echo "</div>";  

			}

		echo "</div>";
		
		echo "</div>";
		

	}

}

 ?>