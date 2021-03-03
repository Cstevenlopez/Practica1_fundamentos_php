<?php
$rango = $_POST["numero"];
$datos;

for($i=0; $i<1000000; $i++){
$num = rand(1,100000);
if($num <= $rango){
$datos[$num]++;
}
}

echo ("<h3>Listado de numeros  </h3>");
for($a=0; $a<=$rango; $a++){
echo ("<h4> $datos[$a] </h4>");	
}

$datos = array_count_values($datos);
asort($datos);

foreach ($datos as $c => $v) {
    //echo "Numero = "." $c Cantidad se repite = $v <br />";
    $suma += $c;	
}


if($v == 1)
{
echo ("<h3>No hay ningun numero que se repita más</h3>");
}
else
{
echo ("<h3>El numero que mas se repite es : $c  y se repite :   $v   veces</h3>");
}
//
$resta= $c * $v;
$total = ($suma - $resta);
echo "La suma de los números sin incluir el que más se repite es : ".$total;
?>