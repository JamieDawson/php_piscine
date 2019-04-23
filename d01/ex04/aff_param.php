#!/usr/bin/php
<?php
$i = 0;
if ($argc == 1)
	return ;
while (++$i < $argc)
{
	echo $argv[$i];
	echo "\n";
}
?>
