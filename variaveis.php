<!DOCTYPE html>
<html>
<head>
	<title>variavel</title>
</head>
<body>
	<?php
		/*
			nomeclaturas de variaveis
			- sempre começar com letras ou _
			-nao poder conte caracteres especiais
			- na leitura ou escrita de valores em variaveis nao esquecer o $
			o tipo da variavel e assumindo a partir do valor que eu atribuo a ela isso  automatico
		*/
			#tipos numericos inteiros
			$a = 10; #numero inteiro
			$b = 010;# numero binario octal
			$c = 0x10;# numero binario hexadecimal
			echo "$a $b $c";
			echo "<br>";

			#tipos ponto flutuantes

			$d = 0.123; #padrao
			$e = .123;
			$f = 2e10; #eleva 2 a 10
			$g = 2e-10; #eleva 2 a -10
			echo "$d $e $f $g";
			echo "<br>";

			#tipo string
			$h = "texto";
			$i = "o valor de d = $d ";# to atribuindo um texto e o valor de otra variavel a uma string
			echo "$h $i";

			#tipo booleano
			 $j = true;
			 $l = false;
			 
	?>
</body>
</html>