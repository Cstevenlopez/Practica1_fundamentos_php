<?php
session_start();
$nombres = array();
echo $_POST['nombre'];
if(isset($_POST['nombre']))
{
    if(isset($_SESSION['nombres'])){
         $nombres = $_SESSION['nombres'];
         $nombres[] = $_POST['nombre'];
         $_SESSION['nombres'] = $nombres;
     } else {
        /* array_push($_SESSION['nombres'], $_POST['nombre']);*/
        $nombres[] = $_POST['nombre'];
        $_SESSION['nombres'] = $nombres;
         var_dump( $_SESSION['nombres']);
     }
}
$valores = $_SESSION["nombres"];
foreach($valores as $val)
{
    echo $val."<br>" ;
} 
?>