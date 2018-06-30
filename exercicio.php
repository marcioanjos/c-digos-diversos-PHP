<?php

$pessoas["joao"]["idade"]     = 20;
$pessoas["joao"]["pai"]       = "Joaquim da Silva" ;
$pessoas["joao"]["endereco"]  = "Rua Cascavel, 450" ;
$pessoas["joao"]["telefone"]  = "45 98111-8787" ;

$pessoas["mara"]["idade"]     = 23;
$pessoas["mara"]["pai"]       = "Jose de Souza" ;
$pessoas["mara"]["endereco"]  = "Av. Argentina, 120" ;
$pessoas["mara"]["telefone"]  = "11 97845-5656" ;

function imprimirPessoa($p){#funçao para imprimir o array acima
	
	echo"<hr>";
	 
	 	foreach($p as $nome => $atributos){
			
			echo"<p>";
			
			echo"Nome: $nome <br>";
			
			foreach ($atributos as $atr => $valor) {
					echo"$atr: $valor <br>";
				}	

			echo"</p>";
		}
	echo"<hr>";
}

imprimirPessoa($pessoas);

?>