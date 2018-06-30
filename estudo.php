<!DOCTYPE html>
		<!--cometarios html -->
<html>
<head>
	<title> estuda </title>
</head>
<body>
	<?php
		//comentarios de linhas
		# tambem comenta
		/* cometario de bloco*/

		#  echo e printf serve para imprimi na tela
		#<br> pula linha
		echo "<h1> Ola Mundo!</h1><br>";
		printf("teste!<br>");
		# $ tem que vir ante da variavel para atribuiçao
		$variavel ="teste para salva na variavel";	
		echo $variavel;
		printf("<h1> %s </h1>", $variavel);#estou imprimindo o valor da vriavel na tela

		$n = 100;
		printf("%d<br>",$n);#imprimi um valor numerico inteiro
		$d = 10.2;
		printf("%.1f <br>",$d);#imprimi um valor decimal ponto flutuante
		
		var_dump($n);#funcao que retona oq esta salvo na variavel e seu tipo
		
	?>
</body>
</html>