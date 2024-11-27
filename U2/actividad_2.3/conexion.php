<?php
//Conexion con la base de datos
$db = new mysqli('mariadb', 'usuarioBD', 'abc123', 'actividad2_3');
// Comprobamos que la conexión se ha realizado
if ($db->connect_error) {
    die("Error en la conexion : " . $db->connect_error);
}

?>