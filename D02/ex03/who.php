#!/usr/bin/php
<?php

    function compare($a, $b)
    {
    	return (strcmp($a['tty'], $b['tty']));
    }
    date_default_timezone_set('Europe/Paris');
    $tab = array();
    $fd = fopen("/var/run/utmpx", "r");
    $format = "a256usr/a4id/a32tty/ipid/itype/Ltvsec/Itvusec/a256host/i16pad";
    $tab = array();
    while ($bytes = fread($fd, 628))
    {
    	$unpacked = unpack($format, $bytes);
    	$tab[] = $unpacked;
    }
    usort($tab, "compare");
    foreach ($tab as $elem)
    {
    	$format = "%b %e %H:%M";
    	if ($elem['type'] === 7)
    	{
    		echo preg_replace('/[\x00]/', '', $elem['usr'])." ".preg_replace('/[\x00]/', '', $elem['tty'])."  ".strftime($format, $elem['tvsec'])." \n";
    	}
    }
?>