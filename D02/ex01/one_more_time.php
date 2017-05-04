#!/usr/bin/php
<?php

function str_error($str)
    {
        echo "$str\n";
            exit();
    }
    
if ($argc < 2)
	exit();
    
date_default_timezone_set('Europe/Paris');
$weekday = '([Ll]undi|[Mm](ardi|ercredi)|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche)';
$day = '([0-2]?\d|3[01])';
$month = '([Jj](anvier|uin|uillet)|[Ff]évrier|[Mm](ars|ai)|[Aa](vril|out)|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]écembre)';
$year = '\d{4}';
$time = '([01]\d|2[0-3])(:[0-5]\d){2}';
$parsing = preg_match("/^$weekday $day $month $year $time$/", $argv[1]);
if (!$parsing)
    str_error("Wrong Format");
$date = preg_replace("/^$weekday /", '', $argv[1]);
$month2 = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
$month_id = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12');
for ($i = 0; $i < 12; $i++)
	$month2[$i] = "/" . $month2[$i] . "/i";
$date = preg_replace($month2, $month_id, $date);
$format = 'd m Y G:i:s';
$date_obj = date_create_from_format($format, $date);
$timestamp = strtotime($date_obj->format('Y-m-d H:i:s'));
echo $timestamp."\n";
?>
