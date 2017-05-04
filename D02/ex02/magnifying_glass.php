#!/usr/bin/php
<?php

    function replace_title($var)
    {
        return 'title="'. strtoupper($var[1]) . '"';
    }
    function replace_link($var)
    {
        return '>'. strtoupper($var[1]) . '<';
    }
    function replace_function($matches)
    {
	    $str = preg_replace_callback('/title="(.*)"/', "replace_title", $matches[0]);
	    $str = preg_replace_callback('/>(.*?)</', "replace_link", $str);
	    return ($str);
    }

    if ($argc < 2 || ($fd = fopen($argv[1], "r")) === FALSE)
	    exit();

    $array = array();
    while ($line = fgets($fd))
	    $array[] = preg_replace_callback("/<a.*a>/", "replace_function", $line);
    foreach ($array as $v)
	    echo $v;
?>
