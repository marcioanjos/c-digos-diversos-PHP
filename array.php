<!DOCTYPE html>
<html>
<head>
	<title>array</title>
</head>
<body>
	<?php 
		$meuarray = [10,20,30,40];
		var_dump($meuarray);
		echo "<br>";
		print_r($meuarray);#funcao para imprimir array
		echo"<br>";
		echo "na posiçao 0 esta  o : $meuarray[0]";
		echo "<br>";
		#o array em php diferente de outras linguangens pode quanda tipos diferentes em cada posicao 
		#posso ter um string na posiçao 0 o inteiro na posicao 1 e um float na posicao 2
		#nao so obrigando a ter apenas um tipo no array
		$a = [];
		$a[] =100;
		$a[] =200;
		$a[] =300;
		$a[] =400;
		$a[] =500;
		$a[4] =600; #substituir o valor que esta na posiao 4
		$a[] ="texto";
		$a[] =true;
		$a[] =10.2;
		var_dump($a);
		echo "<br>";

		$b = [];
		$b[0] = [1,2,3];		
		$b[1] = [0=>10,1=>20,2=>30];
		var_dump($b);
		echo "<br>"; 

		echo ";<h1>arrays de pessoas </h1>";
		#array associativos onde cada posiçao contem outro array dentro dele
		$pessoas["joao"] = ["idade"=>20,"pai"=> "joaquim"];
		$pessoas["maria"] = ["idade"=>21, "pai" => "jose"];
		var_dump($pessoas);
		echo "<br>"; 
		echo "a idade do joao :".$pessoas["joao"]["idade"]; #estou concatenado as string com o array atravez do ponto
		/*e a mesma coisa de cima
		$pessoas["joao"] ["idade"] = 20;
		$pessoas["joao"] ["pai"] = "joaquim";
		*/
		echo "<br>";
		echo "o numero de elementos de pesssoas ".count($a) ; # a funcao count conta quantos elementos ou posiçoes estão atribuidos a um array
		?>

</body>
</html>