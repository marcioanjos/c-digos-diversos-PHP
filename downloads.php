<?php
	/*$conteudo = file_get_contents('arquivo.txt');# retorna todo o arquivo salvo
	if ($conteudo) {
		echo "$conteudo";
	}
	else
		echo "erro ao abri o arquivo";
	*/

	$url = 'https://outlook.live.com/owa/';
	$conteudo = file_get_contents($url);# retorna todo o arquivo salvo de uma pagina web ou do pc
	if ($conteudo) {
		echo "$conteudo";
		file_put_contents("downloads.html", $conteudo); #esta salvado em um arquivo .html oq foi feito o dowloand do arquivo web
	}
	else
		echo "erro ao abri o arquivo";

	# file_put_contents(filename, data) tbm pode se usado para salva conteudo no txt abrindo um novo aruivo passado por ele e para na 	                                    sobreescreeve usa uma  constate FILE_APPEND

?>