<?php

class MiBD extends SQLite3{

	function __construct(){
		$this->open('nueva.db');
	}
}


$bd = new MiBD();

// if(!$bd){
// 	echo $bd->lastErrorMsg();
// }else{
// 	echo "La coneccion fue exitosa";
// }

// en la base de datos sqlite, debe tener permisos de escritura el usuario de servidor web
// para ello es mejor crear la base de datos desde el navegador.
$sqlinsertar = "insert into users values('juan', 'juan@mail.com')";


$ret = $bd->exec($sqlinsertar);
print("$ret").chr(10);
// valor 



$resultado = $bd->query("SELECT * FROM users");

//print_r($resultado->fetchArray(SQLITE3_ASSOC));


while($fila = $resultado->fetchArray(SQLITE3_ASSOC)){

	echo $fila['name']."-".$fila["email"]."<br>";
}

$bd->close();


// cerrar la base de datos --- ver videos
//funcione estan php.net book.sqlite
?>