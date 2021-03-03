<?php
/*
$host = "localhost";
$user = "root";
$clave = "";
$bd  = "practica";
$conectar = mysqli_connect($host,$user,$clave,$bd);


$conectar = new PDO('mysql:host=localhost;dbname=practica','root','');
*/

$db = new PDO('mysql:host=127.0.0.1;dbname=practica','root','');
$db->setAttribute (PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$filas = $db->query('SELECT * FROM datos;');
?>
