	<?php
	function adicionarpessoa1($nome,$idade,$cidade){
		global $pessoa;#informa ao php que ele esta uso um variavel global dentro da funçao e nao criando uma variavel detro da funçao
		$pessoa[]=["nome"=>$nome,"idade"=>$idade,"cidade"=>$cidade];
		
	
	}
	function adicionarpessoa2(&$pessoa,$nome,$idade,$cidade){#outra forma de mostra pra funçao que ela eta usando uma variavel global
	
		$pessoa[]=["nome"=>$nome,"idade"=>$idade,"cidade"=>$cidade];

	}

	function imprimirPessoa(&$pessoa){#imprimir os valores do array
		var_dump($pessoa);
	}
	function getQtdPesso($pessoa){#funcoes para retorna a qtd de pessoas 
		return count($pessoa);#usa se o return para retorna algo da funçao 
	}
	function removePessoa(&$pessoa,$nome){
		$i = array_search($nome, array_column($pessoa, "nome"));#funçao que recebe o array e a coluna para pesquisar
		if (is_integer($i)) {
			#echo "<h1>$i</h1>";
			array_splice($pessoa, $i,1);
		}

	}
	?>