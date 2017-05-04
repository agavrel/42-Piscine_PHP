#!/usr/bin/php
<?php
if ($argc > 1)
{
    $pattern = "/[ ][\t]/";
    $replacement = " ";
    $str = preg_replace($pattern, $replacement, trim($argv[1]));
    echo $str . "\n";
}
?>
