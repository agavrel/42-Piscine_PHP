#!/usr/bin/php
<?php
	$key = $argv[1];
	unset($argv[0]);
	unset($argv[1]);
	foreach ($argv as $elem)
		if (strstr($elem, $key . ":"))
			$value = substr($elem, strlen($key) + 1);
	if (isset($value))
		echo "$value\n";
?>