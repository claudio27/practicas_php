<?php
$gestor_bd = new SQLiteDatabase('sqlitedb');
$resultado = $gestor_bd->arrayQuery('SELECT name, email FROM users LIMIT 25', SQLITE_ASSOC);
foreach ($resultado as $entrada) {
    echo 'Nombre: ' . $entrada['name'] . '  E-mail: ' . $entrada['email'];
}
?>