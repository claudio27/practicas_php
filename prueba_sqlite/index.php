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
	//$resultado = $consulta -> fetchAll(PDO::FETCH_ASSOC); 
    // sin PDO::FETCH_ASSOC, trae los datos en los dos tipos numerico y asociativo
	$resultado = $consulta -> fetchAll(); 
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


?>

