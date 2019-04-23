<?php
    function auth($login, $passwd) {
        if (!$login || !$passwd) //if login or password arent' there, return false
            return false;
        $account = unserialize(file_get_contents('../private/passwd')); // unserialize file
        if ($account) { //if account exist
            foreach ($account as $k => $v) //scroll through each one 
            {
                if ($v['login'] === $login && $v['passwd'] === hash('whirlpool', $passwd)) //if matching
                    return true;
			}
			return false;
        }
        return false;
    }
?>
