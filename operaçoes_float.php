
<html>
<head>
<title>PHP - Ponto Flutuante </title>
</head>
<body>
<?php
    $i = 100.5;
    $soma  = $i + 10;
    $sub   = $i - 5;
    $div   = $i / 5;
    $mul   = $i * 5;

    printf("<p> i=%f, i+10=%f, i-50=%f, i/50=%f, i*5= %f   </p>\n",
        $i, $soma, $sub, $div, $mul);
    
    // round() arendoda os numeros ponto flutuatens
    $r = 15.366;
    $r0 = round( $r ); 
    $r1 = round( $r , 1); // Com precisao
    $r2 = round( $r , 2); // Com precisao
    printf("<p> r  = %f </p>\n", $r );
    printf("<p> r0 = %f </p>\n", $r0);
    printf("<p> r1 = %f </p>\n", $r1);
    printf("<p> r2 = %f </p>\n", $r2);
    
    // ceil()arendoda os valores pra cima e 
    //floor() arendoda os valores pra baixo
    $r = 15.366;
    $r0 = ceil( $r ); 
    $r1 = floor( $r ); 
    printf("<p> r  = %f </p>\n", $r );
    printf("<p> ceil  r0 = %f </p>\n", $r0);
    printf("<p> floor r1 = %f </p>\n", $r1);
    
    // intval()
    $r = 15.366;
    $i = intval(15.366);
    $b = is_float( $r );
    echo "is_float( $r ) = $b <br>";
    $b = is_integer( $i );
    echo "is_integer( $i ) = $b <br>";

    // pow
    $r = pow(2, 10); //eleva os valores como 2 elevado a 10
    printf("<p> 2^10 = %10.4f </p>\n", $r);
    $r = pow(2.1, 9);
    printf("<p> 2.1^9 = %10.4f </p>\n", $r);

    // rand gera numeros randomicamente
    $r = rand();
    printf("<p> rand = %10.4f </p>\n", $r);
    printf("<p> rand = %10.4f </p>\n", rand());
    printf("<p> rand = %10.4f </p>\n", rand());
    printf("<p> rand 1-10   = %10.4f </p>\n", rand(1,10));
    printf("<p> rand 10-100 = %10.4f </p>\n", rand(10,100));
?>
</body>
</html>
