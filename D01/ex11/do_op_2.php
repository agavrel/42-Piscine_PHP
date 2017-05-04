#!/usr/bin/php
<?php

    function str_error($str)
    {
        echo "$str\n";
            exit();
    }

    if ($argc != 2)
        str_error("Incorrect Parameters");
    $calcule = sscanf($argv[1], "%d %c %d %s");
    $nb = $calcule[0];
    $op = $calcule[1];
    $nb2 = $calcule[2];
    if ($calcule[3] || (ord($calcule[3]) == 48))
        str_error("Syntax Error");
    if (!is_numeric($nb) || !is_numeric($nb2))
       str_error("Syntax Error");
    else if (!$nb2)
        if ($op == "/")
            str_error("floating exception");
        else if ($op == "%")
            str_error("modulo 0 behaviour is undefined");
    switch ($op)
    {
        case ("*") :
            echo $nb * $nb2;
            break;
        case ("+") :
            echo $nb + $nb2;
            break;
        case ("-") :
            echo $nb - $nb2;
            break;
        case ("/") :
            echo $nb / $nb2;
            break;
        case ("%") :
            echo $nb % $nb2;
            break;
        default:
            str_error("Syntax Error");
    }
    echo "\n";
?>