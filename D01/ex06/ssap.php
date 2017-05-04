#!/usr/bin/php
<?php
    unset($argv[0]);
    $array = array();
    foreach ($argv as $v)
    {
        $split = array_filter(explode(' ', $v));
        foreach ($split as $v2)
            $array[] = $v2;
    }
    sort($array);
    foreach ($array as $v)
        echo $v."\n";
?>