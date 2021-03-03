<?php
include("conexion.php");

$query = 'SELECT * FROM datos';
$statement = $db->prepare($query);
$statement->execute();
$rows = $statement->fetchAll();
?>


<table>
<thead class="">
<tr>

<th>Nombre</th>
<th>Apellido</th>
<th>Sexo</th>
<th>Direcion</th>
</tr>
</thead>
<tbody>
<?php foreach($rows as $row){?>
<tr>
<td ><?php echo $row['nombre']; ?></td>
<td ><?php echo $row['apellido']; ?></td>
<td ><?php echo $row['sexo']; ?></td>
<td ><?php echo $row['direccion']; ?></td>
<tr>
<?php } ?>                       
</table>