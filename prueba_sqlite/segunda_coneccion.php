<?php
//Conexión a la Base de datos.                                
	$bd = new PDO('sqlite:nueva.sqlite3');                        
	//Código SQL a ejecutar                                       
	$codigo_sql= "select * from gente ";                                     
	
	$resultado = $bd->query($codigo_sql);  

	print_r($resultado);

	$todos = $resultado->fetchAll(ASSOC);
	print_r($todos);
	//print_r(PDO::getAvailableDrivers())
/*
foreach ($resultado as $fila) {

	echo "<table border=solid>";
	echo "<tr>
			<td>{$fila['id']}</td><td>{$fila['nombre']}</td><td>{$fila['apellido']}</td>
		  </tr>";
    echo "</table>";

}
*/
?>