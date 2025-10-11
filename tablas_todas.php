<?php
// tablas de multiplicar


for ($i = 1; $i <= 4; $i++)
{
	echo "Tabla del " . $i . "<br>";
	for ($x = 1; $x <= 9; $x++)
	{	
		echo $i . " x " . $x . " = " . $i * $x . "<br>";
	}
}

?>
