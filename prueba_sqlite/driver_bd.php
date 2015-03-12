<?php

class MiBD extends SQLite3{

	function __construct(){
		$this->open('nueva.db');
	}
}


$bd = new MiBD();

if(!$bd){
	echo $bd->lastErrorMsg();
}else{
	echo "La coneccion fue exitosa";
}


$resultado = $bd->query("SELECT * FROM users");

print_r($resultado->fetchArray(SQLITE3_ASSOC));
/*
while($fila = $resultado->fetchArray(SQLITE3_ASSOC)){

	echo 
}
*/
?>