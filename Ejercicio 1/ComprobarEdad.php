<?php 

$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$fecha = $_POST["fecha"];

$anio = $fecha[0];
$anio1 = $fecha[1];
$anio2 = $fecha[2];
$anio3 = $fecha[3];
$nace = $anio.$anio1.$anio2.$anio3;
$act = 2021;
$edad = ($act - $nace);

if ($edad >= 18)
{
    echo ("Bienvenido al sitio " . $nombre);
} else {
    echo ("" . $nombre. "  no puedes entrar por ser menor de edad");
}
 
?>