#!/usr/bin/php
<?php
if ($argc == 2 && $argv[1][0] != '\0') {
	$all = preg_replace('/\s+/', '', $argv[1]); //remove all white spaces.
	if (preg_match("/^ *(-?[0-9]+) *([\+\\/\-\*\\%]) *(-?[0-9]+) *$/", $all, $match))
	{
		$a = trim($match[1]);
		$sym = trim($match[2]);
		$b = trim($match[3]);
		if ($sym == "+")
			echo $a + $b;
		else if ($sym == "-")
			echo $a - $b;
		else if ($sym == "*")
			echo $a * $b;
		else if ($sym == "/")
		{
			if ($b == '0')
			{
				echo "0";
				return ;
			}
			else
				echo $a / $b;
		}	
		else if ($sym == "%")
		{
			if ($b == '0')
			{
				echo "0";
				return ;
			}
			else
				echo $a % $b;	
		}
		else
			echo ("Syntax Error");
	}
	else
		echo ("Syntax Error");
}
else
	echo ("Incorrect Parameters");
echo ("\n");
?>
