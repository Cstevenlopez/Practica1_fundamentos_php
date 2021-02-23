<html>
<head>
    <title>Arreglo</title>
</head>
<body>
<form method="post" action="Arreglos.php">
<input type="text" name="numero">

<input type="submit" name="generar" value="Generar">
    
</form>
</body>
</html>
<?php
$rand = range(1,50);
?>
<?php
$rand = range(1,50);
shuffle($rand);
foreach ($rand as $val) {
echo "$val ";
}
?>