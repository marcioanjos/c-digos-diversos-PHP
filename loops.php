<?php 
/*for ($i = 0; $i < 10; $i++) { 
	echo"teste <br>";
}
echo"<hr>"#serve para tranca uma linha
while ( <= 10) {
	# code...
}
do {
	# code...
} while ( <= 10);
*/
/*
$a = [10,20,30,40,50];
for ($i=0; $i <count($a) ; $i++) { #count esta contando as posicoes do array
	echo "$a[$i]<br>";
	
}
*/
$a = [10,20,30,40,50];
foreach ($a as $elemento) {#nao tem acesso ao indice mais pecorre todo o array
	echo "$elemento<br>";
}
echo"<hr>";
foreach ($a as $indice => $elemento) {#tem acesso ao indice e elemento
	echo"[$indice] = $elemento<br>";
}
#foreach serve para utilizar o array
echo "<hr>";
$produtos = ["nome"=>"pc","preco"=>50];
$produtos = ["nome"=>"notebook","preco"=>100];

foreach ($produtos as $produto ) {
	echo "<hr>";
	foreach ($produto as $i => $valor) {
		echo "$i = $valor";
	}
}
?>