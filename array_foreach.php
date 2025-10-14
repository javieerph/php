<?php
$names = array("Sandra" => "19/05/1986", "Maria" => "20/11/2002", "Jose" => "20/10/1994", "Javier" => "20/06/204", "Julieta" => "15/01/2014", "Matias" => "20/10/2025");

	
echo "La lista de datos es: " . "<br><br>";
echo "Nombre" . "    Fecha de nacimiento" . "<br><br>";

foreach ($names as $key => $value)
echo "*" . $key . "	" . $value ."<br>";


?>
