<?php

$nombre = "Diego-Palacio.5;28;41;08";
$characters = ["-",".",";"];
$replace = [" "," ",""];

$nombre = str_replace($characters, $replace, $nombre);

echo $nombre;

?>
