#!/usr/bin/php
<?PHP
    if ($argc > 1)
    {
        $array = array_filter(explode(' ', $argv[1]));
        array_push ($array, $array[0]);
		unset($array[0]);
        $res = implode(" ", $array);    
        echo $res . "\n";
    }
?>