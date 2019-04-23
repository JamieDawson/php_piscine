<?php
    include('auth.php'); //if already included, will be not included again.
    session_start(); //start new or resume existing session.
    if ($_GET['login'] && $_GET['passwd'] && auth($_GET['login'], $_GET['passwd']))
    {
        $_SESSION['loggued_on_user'] = $_GET['login']; //login of user submitted a correct login
        echo "OK\n"; //print ok if correct
    } 
    else 
    {
        $_SESSION['loggued_on_user'] = ""; //return empty stirng
        echo "ERROR\n"; //print error since it's wrong.
    }
?>