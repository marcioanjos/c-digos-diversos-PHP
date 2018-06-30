<?php

	 $nome = "escrevendo.txt";
	 $f = fopen($nome, 'w');# w modo de escrita
	 if ($f) {
	 	fwrite($f, "texto a  ser escrito\r\n"); #\r\n para pula texto no arquivo
	 	fwrite($f, "texto a  ser escrito\r\n");
	 	fclose($f);
	 }
							  # a+ escreve e le no final do arquivo	 						
	 						  # a escreve no final do arquivo	
	 $f = fopen($nome, 'r+'); # r+ leitura e escrita
	 if ($f) {
	 	$linha = fgets($f);
	 	echo "<p>primeira linha: $linha ;</p>";
	 	fwrite($f, 'texto 2');
	 	fclose($f);
	 }


?>