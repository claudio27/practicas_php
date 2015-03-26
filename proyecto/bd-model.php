<?php 

	// TODO revisar en CODEIGNITER, poner driver sqlite3, no sqlite
	// cerrar la bd $this->close();
	class BD extends SQLite3{

		function __construct(){
			$this->open('database/productos.db');
		}

	function consulta_todos(){
		$resultado = array();
		$sql = "select * from productos";
		$resultado = $this->query($sql);
		return $resultado;
		// TODO ver un print_r de $resultado
		// para saber si se debe cerrar la bd aca
	}

	 function recupera_datos($res)
 	{
	 	$rows = array();

	 		while ($fila = $res->fetchArray(SQLITE3_ASSOC)) {
				 $rows[] = $fila;
				}

		return $rows;

 	}

 	 function recupera_por_id($id){
 	 	$res = array();
 	 	$sql = "select * from productos where id = $id";
 	 	$res = $this->query($sql);
 	 	return $out = $res->fetchArray(SQLITE3_ASSOC);
 	 }





	}

 ?>