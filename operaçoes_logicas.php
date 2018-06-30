<html>
<head>
<title>PHP - Boolean </title>
</head>
<body>
<?php
    $a = true;
    $b = false;
    echo("a = $a <br>\n");
    echo("b = $b <br>\n");
    
    echo("Operacoes Logicas: <br>\n");

    $r = $a && $b; // true  E  false = false 
    echo("r = $r <br>\n");
    $r = $a || $a; // true  OU true  = true
    echo("r = $r <br>\n");
    $r = $b || $b; // false OU false = false
    echo("r = $r <br>\n");
    $r = $a && $a; // true  E  true  = true
    echo("r = $r <br>\n");
    $r = $b && $b; // false E  false = false
    echo("r = $r <br>\n");
    
    echo("Comparadores: <br>\n");
    $n1 = 10;
    $n2 = 20;

    $r = $n1 > 5;  // menor que
    echo("r = $r <br>\n");
    $r = $n1 < 50; // menor que
    echo("r = $r <br>\n");
    $r = $n1 >= 10;// mair iqual a
    echo("r = $r <br>\n");
    $r = $n1 <= 10;// menor igual a
    echo("r = $r <br>\n");
    $r = $n1 == 10;// igual a
    echo("r = $r <br>\n");
    $r = $n1 != 10;// diferente de
    echo("r = $r <br>\n");
    
    // Multiplas expressoes logicas
    $r = ($n1 == 10) || ($n1 == 20) ;
    echo("r = $r <br>\n");
    $r = ($n1 == 20) && ($n1 == 20);
    echo("r = $r <br>\n");
    $r = ($n1 == 20) || ($n1 == 20) || ($n1 >= 30);
    echo("r = $r <br>\n");
    
    $n = 10;
    $s = 'str';
    $r = is_integer($n) && is_string($s);
    echo("r = $r <br>\n");

    $n1 = 10;
    $n2 = "10";
    $r = ($n1 == $n2);
    echo("r = $r <br>\n");
    $r = ($n1 === $n2);
    echo("r = $r <br>\n");
     
?>
</body>
</html>
