<?php 

session_start();

$productos = array();

if(!isset($_SESSION['productos'])){

	$productos = "No hay productos que mostrar";
}else{

	$productos = $_SESSION['productos'];
	$cantidad = count($productos);

	$str = "En su pedido van # $cantidad productos incluidos :\n";


	foreach ($productos as $key => $value) {
		foreach ($value as $clave => $valor) {
			$str .= "".$clave."---".$valor."\n";
		}
	}

	// echo $str;
}




 ?>

 <html>
 <head>
 	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
	 <script src="assets/js/jquery-2.1.3.min.js"></script>
	 <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/funciones.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->

 	<title>Envie su pedido</title>
 </head>
 <body>

 	<div class="container">
 		<h1>Envie un correo electrónico con su pedido</h1>
 		<div class="row">
 			<div class="col-md-6">
			 	<form action="enviar.php" method="post">
			 		<div class="form-group">
			 		<label for="email">Ingresu su e-mail</label>
			 		<input type="text" class="form-control" id="email" name="emailname">
			 		</div>
			 		<div class="form-group">
			 		<label for="pedido">Su pedido</label>
			 		<textarea class="form-control" rows="10"><?= $str ?>
			 		</textarea>
			 		</div>
			 		<button type="submit" class="btn btn-primary">Enviar</button>
			 	</form>
 			</div>
 		</div>
 	</div>
 </body>
 </html>