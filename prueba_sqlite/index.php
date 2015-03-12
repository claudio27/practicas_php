<?php


//Conexión a la Base de datos.                                
	$bd = new PDO('sqlite:nueva.sqlite3');                        
	//Código SQL a ejecutar                                       
	$codigo_sql= "select * from gente ";                                     
	$consulta = $bd -> prepare($codigo_sql);                      
	$consulta -> execute();                                       
	//Capturamos la salida si se realiza una consulta a la BD.    
	//$resultado = $consulta -> fetch(PDO::FETCH_ASSOC);
	//$resultado = $consulta -> fetch();
	$resultado = $consulta -> fetchAll(PDO::FETCH_ASSOC); 
	print_r($resultado);                           

echo "<br>";

/*
foreach ($resultado as $clave => $valor) {
	echo "<table border=solid>";
	echo "<tr>
			<td>{$clave}</td><td>{$valor}</td>
		  </tr>";
    echo "</table>";
}
*/

foreach ($resultado as $key => $value) {
	foreach ($value as $clave => $valor) {
		echo $clave ." - ". $valor . "<br>";
	}
}

/*

abrir y crear bd sqlite3

	sqlite3 transporte.db

crear tabla
	
	create table bus(
  id_bus char (6) primary key not null,-- bus001 hasta bus015
  descripcion varchar(25) not null,-- describe el bus
  fecha date not null,--fecha de adquisición o compra
  capacidad integer not null);--cantidad máxima de pasajero


*/

?>

