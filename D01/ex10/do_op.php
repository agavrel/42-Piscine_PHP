#!/usr/bin/php
<?php
    function do_op($nb, $op, $nb2)
    {
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
        }
    }

    if ($argc != 4)
    {
        echo "Incorrect Parameters\n";
        exit();
    }
    
    $nb = intval($argv[1]);
    $op = trim($argv[2]);
    $nb2 = intval($argv[3]);
    $result = do_op($nb, $op, $nb2);
    echo $result."\n";
?>
