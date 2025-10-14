<?php
$clientes = array
(
	array("Nombre" => "Jorge ramirez", "Telefono" => "5458753",
	"Edad" => 40),

	array("Nombre" => "Pedro suarez", "Telefono" => "5869542",
	"Edad" => 50),

	array("Nombre" => "Maria Sachica", "Telefono" => "895256",
	"Edad" => 38),
);

echo $clientes[1]["Nombre"] . "<br>";
echo $clientes[0]["Nombre"] . "<br>";
echo $clientes[2]["Telefono"] . "<br>";
echo $clientes[1]["Edad"] . "<br>";


?>
