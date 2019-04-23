#!/usr/bin/php
<?php
$stdin = fopen("php://stdin", "r");
while (1)
{
	echo "Enter a number: ";
	$grab = fgets($stdin);
	if ($grab == FALSE)
	{
		echo "\n";
		break ;
	}
	$line = substr($grab, 0, -1);
	if (strlen($line) > 0 && is_numeric($line))
	{
		echo "The number ",$line." is ";
		if ($line == 0)
			echo "even";
		if ($line == 1)
			echo "odd";
		if ($line > 0 && $line != 1 && $line != 0)
		{
			if ($line % 2 == 0)
				echo "even";
			else
				echo "odd";
		}
	}
	else
		echo "'$line' is not a number";
	echo "\n";
}
?>
