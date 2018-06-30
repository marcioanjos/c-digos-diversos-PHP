r
<?php
/*
	function nomedafunçao(paramentros da função){
		codigos da função;
	}
*/
	$minhafuncao = function($nome){#atribui a funçao a uma variavel
		echo "<h1> Nome: $nome </hi>";
	};

	$minhafuncao("marcio");
	$minhafuncao("josy");#chamando minha funçao

	/*function executarFuncao($paramentro,$funcao
	){
		$funçao($paramentro);
	};

	executarFuncao("maria", function($nome){
		echo "<h1>Funcao anonima: $nome</h1>";
	});
*/
	function teste($paramentro1="padra",$paramentro2="padra2"){# o padra so sera atribuido se quando for chama a funçao omitir esse paramentro e sempre atribuir os valores padroes da direita para a esquerda
		echo"<h1>$paramentro1  $paramentro2</h1>";
	};
	teste("oi","bom dia")
 ?>