<?php
	if ($_GET)
	{
		if (!($_GET['action'] == "set" || $_GET['action'] == "get" || $_GET['action'] == "del"))
			return ;
		$_GET['action'] == "set" ? setcookie($_GET['name'], $_GET['value']) : 0;
		if (($_GET['action'] == "get") && ($_COOKIE[$_GET['name']] != NULL))
				echo ($_COOKIE[$_GET['name']])."\n";
		$_GET['action'] == "del" ? setcookie($_GET['name'], "", time() - 3600) : 0;
	}
?>
