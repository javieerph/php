<?php
function ft_strlen(string $str)
{
	$i = 0;
	while (isset($str[$i]))
		$i++;
	return ($i);
}

$palabra = "PARANGUARICUTIRIMICUARO";
$i = 0;
$size = ft_strlen($palabra);

while ($i < $size)
{
	echo $palabra[$i] . " ";
	$i++;
}

?>
