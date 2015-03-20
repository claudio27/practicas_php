<?php 

	class MiSqlite extends Sqlite3{

		function __construct(){
			// la abre y si no existe intenta crearla
			$this->open('creada.db');
		}
	}


	// creamos una instancia de la bd
	$obj = new MiSqlite();

	// $creacion = "create table primera(id int, nombre text, apellido text)";
	// $obj->exec($creacion);

	$insertar = "insert into primera values(1, 'claudio', 'serrano')";
	$obj->exec($insertar);

 ?>