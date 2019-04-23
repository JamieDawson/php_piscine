<?php
if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK") 
{
	!file_exists('../private') ? mkdir("../private") : 0; //private doesn't exist? Make it exist. Othewise skip.
	!file_exists('../private/passwd') ? file_put_contents('../private/passwd', null) : 0; //create passwd file after
	$account = unserialize(file_get_contents('../private/passwd')); //converts to actual data from serialized
	if ($account) //if we collected data.
	{
		$exist = 0;
		foreach ($account as $k => $v) //array loop that compare only usernames. No need to compare passwords. 
		{
			if ($v['login'] === $_POST['login'])//found username? exist now equals 1.
				$exist = 1;
		}
	}
	if ($exist) //found same username? Print error.
		echo "ERROR\n";
	else //Unique username?
	{
		$tmp['login'] = $_POST['login']; //temp holds onto username.
		$tmp['passwd'] = hash('whirlpool', $_POST['passwd']); //temp also holds onto password. Using whirlpool per php vid.
		$account[] = $tmp; //set values from temp to account. Similiar to ft_swap in C piscine.
		file_put_contents('../private/passwd', serialize($account)); //send serialized info to file
		echo "OK\n"; //done!
	}
} 
else
	echo "ERROR\n";
?>
