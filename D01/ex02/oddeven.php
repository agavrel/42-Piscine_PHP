#!/usr/bin/php
<?php
     $stdin = fopen("php://stdin", "r");
      while ($stdin && !feof($stdin))
      {
        echo "Enter a number: ";
        $number = fgets($stdin);
        if ($number)
        {
            $number = str_replace("\n", "", $number);
            if (is_numeric($number))
            {
                if (($number & 1))
                    echo "The number " . $number . " is odd\n";
                else
                    echo "The number " . $number . " is even\n";
            }
            else
                echo "'" . $number . "' is not a number\n";
        }
    }
    fclose($stdin);
    echo "\n";
?>
