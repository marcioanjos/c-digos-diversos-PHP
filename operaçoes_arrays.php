<html>
<head>
<title>PHP - Arrays </title>
</head>
<body>
<?php
    $a1    = [10,20,30,40,50,60,70,80];
    $a1[]  = 90;  // Adicionando novo elemento, o php escolhe a posicao
    $a1[9] = 100; // Adicionando novo elemento, determinando a posicao

    $c = count($a1);//conta quantas posicoes tem o array
    printf("<p> Count = %d </p>\n", $c);

    if (isset($a1[10]))//verificar se a posiçao esta ocupada
        printf("<p> a1[10] = %d </p>\n", $a1[10]);
    else
        printf("<p> posicao a1[10] nao existe </p>\n");

    $a1[10] = 101;
    if (isset($a1[10]))
        printf("<p> a1[10] = %d </p>\n", $a1[10]);

    // array_keys() retona os indices do array 
    $a1_keys = array_keys($a1);
    var_dump($a1_keys);
    $a2 = ["key1"=>10, "key2"=>11, "key3"=>12, "key4"=>13, "key5"=> 14];
    echo "<br>\n";
    $a2_keys = array_keys($a2);
    var_dump($a2_keys);
    echo "<br>\n";
    
    // array_merge serve para junta os arrays entre parentese
    $a1=array("vermelho", "verde");
    $a2=array("azul","amarelo");
    $a3 = array_merge($a1,$a2);
    print_r($a3);
    echo "<br>\n";
    
    // array_fill serve para preencher um array em determindo espaco com oq a gente quiser
    $a1=array_fill(3,4,"blue");
    print_r($a1);
    echo "<br>\n";
    
    // array_reverse inverte as posiçoes do array
    $a1 = [10,20,30,40,50,60,70,80];
    print_r( array_reverse($a1) );
    echo "<br>\n";

    // array_sum
    $a1 = [10,20,30,40,50,60,70,80];
    echo "array_sum = " . array_sum($a1) ;
    echo "<br>\n";

    // array_search
    $a1 = [10,20,30,40,50,60,70,80];
    echo "array_search( 40 ) = " . array_search(40, $a1) ;// procura o valor dentro do array e se estiver rentona o id
    echo "<br>\n";

    // array_values - retorna somente os valores, sem as chaves
    $a2 = ["key1"=>10, "key2"=>11, "key3"=>12, "key4"=>13, "key5"=> 14];
    print_r( array_values( $a1 ) );
    echo "<br>\n";

    // sort e rsort
    $a1 = [40,20,10,90,80,30,50,70];
    sort($a1);
    echo "sort( a1 ) = " ;
    print_r($a1);
    echo "<br>\n";
    rsort($a1);
    echo "rsort( a1 ) = " ;
    print_r($a1);
    echo "<br>\n";

    // sort e rsort
    $a1 = [40,20,10,90,80,30,50,70];
    sort($a1);//colocar o array ordenado
    echo "sort( a1 ) = " ;
    print_r($a1);
    echo "<br>\n";
    rsort($a1);//colocar o array ordenado na ordem decrescente
    echo "rsort( a1 ) = " ;
    print_r($a1);
    echo "<br>\n";

    // asort e arsort so e uso se for um array assossiativo
    $a1 = ["key1"=>13, "key2"=>11, "key3"=>14, "key4"=>10, "key5"=> 12];
    asort($a1);//ordena desscrencete
    echo "asort( a1 ) = " ;
    print_r($a1);
    echo "<br>\n";
    arsort($a1);//ordena crescente
    echo "arsort( a1 ) = " ;
    print_r($a1);
    echo "<br>\n";

    // array_multisort ordena o array em forma crencente das strings
    $a1=array("maca","pera","melancia","abacate","limao","goiaba","laranja");
    array_multisort($a1); // array_multisort($a1,SORT_ASC)
    print_r($a1);
    echo "<br>\n";

    array_multisort($a1, SORT_DESC);//ordena o array em forma decrencente das strings
    print_r($a1);
    echo "<br>\n";
    
    $a1=array("maca",        "pera",       "melancia",   "abacate",    "limao",     "goiaba",    "laranja");
    $a2=array("avermelhada", "esverdeada", "esverdeada", "esverdeado", "amarelado", "amarelada", "laranjada");
    array_multisort($a1, $a2);//ordena dois arrays com o mesmo tamanho e mesma correspondecia
    print_r($a1);
    print_r($a2);
    echo "<br>\n";  

    // array_slice
    $a1 = [10,20,30,40,50,60,70,80];
    echo "array_slice = " ; 
    print_r(array_slice($a1, 5)) ;//pegar os resultado do vetor a partir do 5 indice proximos elementos
    echo "<br>\n";
    print_r(array_slice($a1, 2, 2)) ;//pegar os resultado do vetor os da posicao pasada e quantos elementos deseja
    echo "<br>\n";
    
    // unset 
    $a1 = [10,20,30,40,50,60,70,80];
    unset($a1[2]);
    unset($a1[3]);
    unset($a1[4]);
    echo "apagando indices 2,3,4 = " ;
    print_r($a1) ;
    echo "<br>\n";

    // array_splice
    $a1 = [10,20,30,40,50,60,70,80];
    array_splice($a1, 2, 3);
    echo "array_splice = " ;
    print_r($a1) ;
    echo "<br>\n";

    // in_array procura o valor esta no vetor e retorna um vedadeiro ou falso
    $procurar = 10;
    $arr = [1,2,3,10,9,80,78,90];
    if (in_array($procurar, $arr))
        echo "<p>achou</p>\n";
    else
        echo "<p>NAO achou</p>\n";

    // end retorna o ultimo elemento do array
    $arr = [1,2,3,4,5];
    $ultimo = end( $arr );
    echo "<p>Ultimo elemento: $ultimo</p>\n";

?>
</body>
</html>
