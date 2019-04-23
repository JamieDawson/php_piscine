#!/usr/bin/php
<?php
if ($argc == 1)
    return ;

if ($argc >= 2)
{
    $string = $argv[1];
    $string = trim(preg_replace('/[\t\n\r\s]+/',' ', $string));
    echo $string;
}
?>
