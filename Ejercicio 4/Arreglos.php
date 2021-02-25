<?php
$n=$_GET["valorn"];
echo "Estos son $n numeros aleatorios entre 1 y 100 <br />";
$total=0;
$min=null;
$max=null;
$mr[] = array();
while ($cantidad<=$n -1){
    $rand=rand(1,20);

    $mr = array($rand);
    
    echo "Numero aleatorio $rand <br />";
    $total+=$rand;
    if (is_null($min) || $rand<$min) {
        $min = $rand; // guardo el menor
    }
    if (!is_null($max) || $rand>$max) {
        $max = $rand; // guardo el mayor
    }
 $cantidad ++;
}
echo "La suma de los n&uacute;meros generados es $total <br />";
echo "El promedio es ".($total/$n)."<br />";
echo "El menor es $min <br />";
echo "El mayor es $max <br />";
echo "Valor que mas se repite : ".$mr[0]; 
?>