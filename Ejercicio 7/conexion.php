<?php
//conectamos al servidor
$conectar=@mysql_connet('localhost','root','');
//verificamos la conexion
if(!$conectar){
echo"no se pudo conectar con el servidor";
}else{

    $base=mysql_select_db('practica');
    if(!$base){
        echo"No se encontro la base de datos";
    }
}

//recuperar las variables
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$dirección=$_POST['dirección'];
//hacemos la sentencia de sql
$sql="INSERT INTO datos VALUES('$nombre','$apellido','$edad','$sexo','$dirección')";

//ejecutamos la sentencia de sql
$ejecutar=mysql_query($sql);
//verificamos la ejecucion
if(!$ejecutar){
    echo"hubo algun error";
}else{
    echo"Datos Guardados correctamente<br>< a href='index.html>Volver</a>";
}






?>


















