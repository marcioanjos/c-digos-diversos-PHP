<html>
<head>
<title> Se... </title>
</head>
<body>

<?php
    
    $a = 3;
    if ($a == 1)
        echo "<p> a = um </p>\n";
    elseif ($a == 2)
        echo "<p> a = dois </p>\n";
    elseif ($a == 3)
        echo "<p> a = tres </p>\n";
    elseif ($a == 4)
        echo "<p> a = quatro </p>\n";
    else
        echo "<p> a = nao sei </p>\n";
    print "<hr>";

    switch($a) {
        case 1:
            echo "<p> a = um </p>\n";
            break;
        case 2:
            echo "<p> a = dois </p>\n";
            break;
        case 3:
            echo "<p> a = tres </p>\n";
            break;
        case 4:
            echo "<p> a = quatro </p>\n";
            break;
        default:
            echo "<p> a = nao sei </p>\n";
    }

    if ($a == 1 || $a == 2)
        echo "<p>a = 1 ou 2</p>\n";
    elseif ($a == 3  || $a == 4)
        echo "<p>a = 3 ou 4</p>\n";
    else
        echo "<p>a = nao sei</p>\n";
    
    switch($a) {
        case 1:
        case 2:
            echo "<p>a = 1 ou 2</p>\n";
            break;
        case 3:
        case 4:
            echo "<p>a = 3 ou 4</p>\n";
            break;
        default:
            echo "<p> a = nao sei </p>\n";
    }

?>

</body>
