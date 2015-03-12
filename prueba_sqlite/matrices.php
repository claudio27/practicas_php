<?php

/*
		Ejemplo uso de matrices en PHP

Sintaxis básica

array(clave => valor, );

clave: entero o cadena de texto o valor (cualquier tipo de dato)

*/

$nombres_de_mujer = array(0 => 'Ana', 1 => 'Gabriela', 2 => 'Cecille');

$telefonos_amigos = array('Juan' => '15 4017-2530',
						   'Javiera' => '4921 -1200');

$datos_de_juan = array('apellido' => 'Peréz',
						'Fecha de nacimiento' => '23-11-1970',
						'Teléfonos' => array('casa' => '4310-9030',
											  'movil' => '15 4013-3123',
											  'trabajo' => '4604-9000')
						,
						'casado' => True,
						'Pasaporte' => False,
						);


// declarar un array, puede estar inicialmente vacío

$un_array = array();

//imprimir por pantalla con print_r($array)

print_r($nombres_de_mujer)."<br>";

salto();

print_r($telefonos_amigos)."<br>";

salto();

print_r($datos_de_juan)."<br>";


// ACCESO A LOS ITEMS DE UN ARRAY
// se puede llamar a su clave, o por su número de índice
$apellidos = array('Ana' => 'Rodriguez', 'Marcos' => 'Gómez',);
echo $apellidos['Ana']."<br>"; // imprime Rodriguez
echo $nombres_de_mujer[1]."<br>"; // imprime Gabriela


// echo $telefonos_amigos[0]."<br>";
// dice ofset parece que no considera el valor interno
// como aparece en el manual 
// echo $telefonos_amigos['Juan']."<br>";

// SIN CLAVE EXPLICITAMENTE ASOCIADA
$mi_array = array('Ana','Gabi','Julia','Noelia');
// en este caso siempre se accede por número de índice

print_r($mi_array);
echo "indice 0 en $ mi_array : $mi_array[0]"."<br>";

// MODIFICAR ELEMENTOS
$mi_array[1] = 'Cambianita';
print_r($mi_array);

echo "<br>";

// AGREGAR ELEMENTOS
// se asigna el elemento a un índice vacío
// se agrega al final de la lista
$mi_array[] = 'Nuevo';
print_r($mi_array);

echo "<br>";

// AGREGAR ELEMENTOS
// si se desea asociar el nuevo valor a una clave, se debe
// indicar

$telefonos_amigos['Claudio'] = '777-0123312';
$telefonos_amigos['Nadia'] = '777-1234122';

print_r($telefonos_amigos);

salto();

// RECORRER MATRICES DINÁMICAMENTE CON foreach

/*
	foreach($array as $valor_de_retorno){
		algoritmo a realizar con cada uno de los elementos
	}
$array: nombre de la matriz a ser iterada
$valor_de_retorno: nombre que se utilizará como identificador
del elemento, el cual retornará su valor.

*/
$nombres_propios = array('ana','julia','luisa','alberto','cecilia','carlos');

foreach ($nombres_propios as $nombre ) {
	
	echo $nombre . chr(10);
}

salto();

foreach ($mi_array as $id) {
	echo $id . chr(10);
}


// ITERAR OBTENIENDO LAS CLAVES DE CADA ELEMENTO
/*
	foreach($array as $clave => $valor){
		algoritmo a ejecutar en cada iteracion
	}

*/

salto();

foreach ($datos_de_juan as $titulo => $dato) {
	
	if(!is_array($dato)){
		if($dato === True){
			$dato = 'Si';
		}else if($dato === False){
			$dato = 'No';
		}
		echo "{$titulo}: {$dato}". chr(10);
	}else{
		foreach ($dato as $tipo_telefono => $numero) {
			echo "Teléfono {$tipo_telefono}: {$numero}" .chr(10);
		}
	}
}

salto();

print_r($datos_de_juan);

salto();

// para que cambie el valor dinámicamente en el array
// se puede asignar el valor por referencia con &

foreach ($datos_de_juan as $titulo => &$dato) {

	if(!is_array($dato)){
		if($dato === True){
			$dato = "Si";
		}else if($dato === False){
			$dato = "No";
		}
		echo "{$titulo}: {$dato}". chr(10);
		}else{
			foreach ($dato as $tipo_telefono => $numero) {
				echo "Teléfono {$tipo_telefono}: {$numero}" .chr(10);
			}
		}
	}

salto();

// ASIGNACION POR REFERENCIA
// Es muy útil, cuando se necesita aplicar una misma función, a todos
// los elementos de un array, Ej. Convertir a mayúscula todos los elementos
// con strtoupper()

foreach ($nombres_propios as &$nombre) {
	$nombre = strtoupper($nombre);
}

print_r($nombres_propios);

salto();

// fuerza un salto de línea html
function salto(){
	echo "<br>";
} 

?>