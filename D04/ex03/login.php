<?php
    include("auth.php");

    session_start();
    if ($_GET['login'] && $_GET['passwd'] && auth($_GET['login'], $_GET['passwd']))
    {
        $_SESSION['loggued_on_user'] = $_GET['login'];
        echo "OK\n";
    } 
    else
        echo "ERROR\n";
?>
