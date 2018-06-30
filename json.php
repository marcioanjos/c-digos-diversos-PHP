<?php 

	$pessoa['nome'] = "joao da silva";
	$pessoa['idade'] = 23;
	$pessoa['cidade'] = "fortaleza";
	$pessoa['filho'] = ['lucas','maria'];
	$s = json_encode($pessoa);#trasforma o array e jason java script
	echo $s;
	echo '<br>';
	$v = [1,2,3,4,5,6,7,8,9];

	$s = json_encode($v);
	echo "$s";

	$pessoas[] = ['nome'=>'joao da silva','idade'=> 30];
	$pessoas[] = ['nome'=>'maria','idade'=> 20];
	$pessoas[] = ['nome'=>'joaquina','idade'=> 40];
	$pessoas[] = ['nome'=>'joao ','idade'=> 100];

	$s = json_encode($pessoas);
	echo $s;

	$arraypessoas = json_decode($s, true);
	echo "<br>";
	var_dump($arraypessoas);

	file_put_contents('pessoas.json', $s);
	$conteudo = file_get_contents('pessoas.json');
	$pessoasdoarquivo = json_decode($conteudo, true);
	echo "<br><br>";
	var_dump($pessoasdoarquivo);

?>