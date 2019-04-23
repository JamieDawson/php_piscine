<?php
if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] === "OK") 
{		 
	!file_exists('../private') ? mkdir("../private") : 0; //private doesn't exist? Make it exist. Othewise skip.
	!file_exists('../private/passwd') ? file_put_contents('../private/passwd', null) : 0; //create passwd file after
	$account = unserialize(file_get_contents('../private/passwd'));
	if (!$account) //it's empty.
	{
		echo "ERROR\n";
		return ;
	}
	if ($account) //not empty.
	{
		$exist = 0;
		foreach ($account as $k => $v) 
		{
			if ($v['login'] === $_POST['login'] && $v['passwd'] === hash('whirlpool', $_POST['oldpw'])) //confirm old password and login is same.
		   	{
				$exist = 1;
				$account[$k]['passwd'] =  hash('whirlpool', $_POST['newpw']); //
			}
		}
		if ($exist == 0)
		{
			echo "ERROR\n";
			return ;
		}

		if ($exist == 1) 
		{
			file_put_contents('../private/passwd', serialize($account));
			echo "OK\n";
		}
	} 
} 
else 
{
	echo "ERROR\n";
}
