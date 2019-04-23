#!/usr/bin/php
<?php
    $i = 1;
    if ($argc == 1)
        return ;
	if ($argc >= 2)
	{	
 	  	 $hold = $argv[1];
  		  while (++$i < $argc)
   		      $hold .= ' ' . $argv[$i];
   		 $array = array_filter(explode(' ', $hold));
  		 sort($array); 
   		 $i = -1;
   		 $x = count($array);
   		 while(++$i < $x)
    	    echo "$array[$i]\n";
	}
?>
