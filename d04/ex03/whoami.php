<?php
    session_start();//start new or resume existing session.
    if ($_SESSION['loggued_on_user']) //if logged in user
        echo $_SESSION['loggued_on_user']."\n"; //prints users name
    else
        echo "ERROR\n"; //print error
?>
