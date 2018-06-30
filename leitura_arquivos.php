<?php 
	
	$s = 'arquivo.txt';#criando arquivo
	
		
	if (file_exists($s))# funcao que veifica se o arquivo existi 
	{
		echo "<p>arquivo existi</p>";
		$f = fopen($s, 'r');#abrindo o aquivo: r ler
		if($f)
		{				#feof($f); funçao que retorna true qunado acha o final do arquivo ele percorre todo arquivo quando chegar no fim 								aparece true
						#fgets($f); funçao que ler linha por linha de um arquivo so retorna uma liha
						#fgetc($f); funçao que ler byte a byte do arquivo todos os caracteres
			$conteudo = fread($f,filesize($s));#realizando a leitura do arquivo filesize retorna o tamanho do arquivo e fread leitura
			echo "<p>conteudo do arquivo</p>";
			echo $conteudo;
			fclose($f);
		}
			
	}
	else
	{
		echo "<p>arquivo nao existe: $s </p>";
	}
	
?>