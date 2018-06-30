<?php
	
	include('minhabiblioteca.php');#todo o conteudo do arquivo esta aqui dentro
	
	/*include('qualquerarquivo.php');#da um warning pois nao existi so da um aviso mais executa o resto

	require('qualquerarquivo.php');#funciona igual o include mais se o arquivo nao existir da erro diferente do include que execute todo o excripite mesmo que nao exista
	
	include_once("minhabiblioteca");#verificar se a biblioteca ja foi estanciada para nao haver duplicidade
	require_once("minhabiblioteca");#verificar se a biblioteca ja foi estanciada para nao haver duplicidade*/
	$pessoa =[];
	adicionarpessoa1("marcio",23,"ceara");
	adicionarpessoa2($pessoa,"josy",22,"ceara");
	imprimirPessoa($pessoa);
	$c = getQtdPesso($pessoa);
	echo "<h1>quantidade de pessoa : $c</h1>";
	echo "<h1>removendo pessoa....</h1>";
	removePessoa($pessoa,"marcio");
	$c = getQtdPesso($pessoa);
	echo "<h1>quantidade de pessoa : $c</h1>";


?>