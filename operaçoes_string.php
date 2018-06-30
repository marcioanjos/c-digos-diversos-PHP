<html>
<head>
<title>PHP - Strings </title>
</head>
<body>
<?php
    $s = "Meu Texto";
    printf("<p>s: %s </p>\n", $s);#printando o valor na tela os \n so serve para pula linha no html e nao no printi
    
    // Concatenação: Utilize o "."
    $s = $s . ": Concatenando...";
    printf("<p>s: %s </p>\n", $s);
    $s .=  " 1 2 3"; // s = s . "1 2 3" a variavel recebe ela mais alguma coisa
    printf("<p>s: %s </p>\n", $s);

    $i = 100;
    $s = $s . ": i = $i...";
    printf("<p>s: %s </p>\n", $s);

    $s = "Numero i = " . $i . "; ";
    printf("<p>s: %s </p>\n", $s);

    /* Funcoes */

    // strlen serve para conta quantas caracteres tem na string
    $s = "Hello world";
    $i = strlen($s);   //retona um avalr inteiro
    printf("<p>strlen(s) = %d</p>\n", $i);
    
    // strtoupper transforma toda string em maisculas
    $u = strtoupper($s);
    printf("<p>strtoupper(s) = %s</p>\n", $u);
    
    // strtolower transfoma todas as lentras em minusculas
    $u = strtolower($s);
    printf("<p>strtolower(s) = %s</p>\n", $u);
    $u = strtolower("TESTANDO STRING MAIUSCULA");
    printf("<p>strtolower(s) = %s</p>\n", $u);

    // strpos retona a posicao da string em outra string PECORRENDO COMO SE FOSSE UM ARRAY
    $p = strpos($s, "Hel"); 
    printf("<p>strpos( Hel ) = %d</p>\n", $p);
    $p = strpos($s, "ll"); 
    printf("<p>strpos( ll ) = %d</p>\n", $p);
    $p = strpos($s, "rld"); 
    printf("<p>strpos( rld ) = %d</p>\n", $p);

    $t = "hel";
    $p = strpos($s, $t); 
    printf("<p>strpos( %s ) = %d</p>\n", $t, $p);
    if ($p === false) // Adiantando o IF S
        printf("<p> nao encontrou a string '%s'</p>\n", $t);
    else
        printf("<p>Encontrou: strpos( %s ) = %d</p>\n", $t, $p);

    // stripos
    $t = "hel";
    $p = stripos($s, $t); 
    if ($p === false) // Adiantando o IF 
        printf("<p>Nao encontrou a string '%s'</p>\n", $t);
    else
        printf("<p>Encontrou: stripos( %s ) = %d</p>\n", $t, $p);

    // trim
    $s = " Hello World               ";
    $t = trim($s);
    printf("<p>trim( %s ) = %s</p>\n", $s, $t);

    $s = "_______Hello World_______________";
    $t = trim($s,'_');
    printf("<p>trim( %s ) = %s</p>\n", $s, $t);

    ///serve para compara strings dizer qual string vem primeiro
    // strcmp e strcasecmp
    // retorna 
    //    < 0 se str1 vier antes que str2; 
    //    > 0 se str1 vier depois que str2 
    //    0 se sao iguais 
    $s1 = "minha string";
    $s2 = "string";
    $r = strcmp($s1, $s2);
    printf("<p>strcmp( %s, %s ) = %d</p>\n", $s1, $s2, $r);
    $r = strcmp($s2, $s1);
    printf("<p>strcmp( %s, %s ) = %d</p>\n", $s2, $s1, $r);

    $s1 = "mesma string";
    $s2 = "mesma string";
    $r = strcmp($s2, $s1);
    printf("<p>strcmp( %s, %s ) = %d</p>\n", $s2, $s1, $r);

    $s1 = "Mesma string";
    $s2 = "mesma string";
    $r = strcmp($s2, $s1);
    printf("<p>strcmp( %s, %s ) = %d</p>\n", $s2, $s1, $r);

    $r = strcasecmp($s2, $s1); // ignora case (maiusculas ou minusculas)
    printf("<p>strcasecmp( %s, %s ) = %d</p>\n", $s2, $s1, $r);
    
    // explode, separa pedacos de uma string em um array, dado um separador
    $computador  = "mouse teclado monitor teclado memoria cpu impressora";
    $pecas = explode(" ", $computador); // separador eh ' '
    print_r($pecas);

?>
</body>
</html>
