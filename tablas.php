<?php
// tablas de multiplicar

$tabla = 5;
$result = 0;

echo "La tabla del " . $tabla . "<br><br>";

for ($i = 1; $i <= 9; $i++)
{
	$result = $tabla * $i;
	echo $tabla . " x " . $i . " = " . $result . "<br>";
}

?>
