<?php
	function imprimirMeuTexto($titulo) {#funçao em php corpo da funçao
	$texto = "esse e meu texto a ser impresso";
	
	
	echo "<h1> $titulo </h1>";
	echo "<h1> $texto </h1>";
}
imprimirMeuTexto("nome");#paramentro passa uma variavel
imprimirMeuTexto("titulo");
imprimirMeuTexto("inicio");

?>