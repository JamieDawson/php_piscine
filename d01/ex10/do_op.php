#!/usr/bin/php
<?php
if ($argc != 4)
{
	echo "Incorrect Parameters";
	return ;
}
if ($argc == 4)
{
	$a = trim($argv[1]); //replace  $argv[1] with $a.
	$b = trim($argv[3]); //replace $argv[3] with $b

	$sym = trim($argv[2]);//replace $argv[2]

	if ($sym == "+" || $sym == "-" || $sym == "*" || $sym == "/" || $sym == "%")
	{
		if ($sym == "+")
			echo $a + $b;
		if ($sym == "-")
			echo $a - $b;
		if ($sym == "*")
			echo $a * $b;
		if ($sym == "/")
		{
			if ($b == '0')
			{
				echo "0";
				return ;
			}
			else
				echo $a / $b;
		}	
		if ($sym == "%")
		{
			if ($b == '0')
			{
				echo "0";
				return ;
			}
			else
				echo $a % $b;	
		}	
		return ;
	}
}
echo "Incorrect Parameters";
return ;
?>
