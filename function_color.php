<?php
function email($desde, $destinatarios, $asunto, $mensaje)
{
	echo "<p style='color: blue;'>Preparando envio de mensajes...</p>";
	echo "=======================================" . "<br>";
	echo "Desde: " . $desde . "<br>";
	echo "=======================================" . "<br>";
	echo "Destinatarios: " . "<br>";

	foreach ($destinatarios as $destinatario)
	{
		echo $destinatario . "<br>";
	}

	echo "=======================================" . "<br>";
	echo "Asunto: " . $asunto . "<br>";
	echo "=======================================" . "<br>";
	echo "Mensaje: " . $mensaje . "<br>";
	echo "=======================================" . "<br>";
	echo "Mensaje enviado con exito" . "<br>";
}

$destinatarios = array("Javier@gmail.com", "maria123@hotmail.com", "pedro.maria@outlook.com");

email("javier555@apipanels.com", $destinatarios, "Welcome", "I just wanted to say hello and welcome to the new members of our group.");
?>
