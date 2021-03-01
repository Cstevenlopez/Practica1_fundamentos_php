<?php
session_start();
$nombres = array();
if(isset($_POST['nombre']))
{
    if(isset($_SESSION['nombres'])){
         $nombres = $_SESSION['nombres'];
         $nombres[] = $_POST['nombre'];
         $_SESSION['nombres'] = $nombres;
     } else {
         array_push($_SESSION['nombres'], $_POST['nombre']);
     }
}

$valores = $_SESSION["nombres"];
foreach($valores as $val)
{
    echo $val."<br>" ;
} 
?>