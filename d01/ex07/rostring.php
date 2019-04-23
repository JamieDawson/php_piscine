#!/usr/bin/php
<?php
	if ($argc == 1)
		return ;
	if($argc >= 2)
	{
 	    $array = trim(preg_replace('/[\t\n\r\s]+/',' ', $argv[1]));
	    $all = count($array = explode(' ', $array));
	    $i = 0;
		while(++$i < $all)
		{
			echo "$array[$i]";
			echo " ";
		}
		echo "$array[0]\n";
	}
?>
