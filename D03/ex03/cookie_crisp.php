<!--https://www.w3schools.com/php/php_cookies.asp-->
<?php
    switch ($_GET['action'])
    {
	    case("set"):
	        if ($_GET['name'] && $_GET['value'])
                setcookie($_GET['name'], $_GET['value']);
                break;
	    case("get"):
			if ($_GET['name'] && $_COOKIE[$_GET['name']] && !$_GET['value'])
                echo $_COOKIE[$_GET['name']]."\n";
                break;
	    case("del"):
			if ($_GET['name'] && !$_GET['value'])
                setcookie($_GET['name'], '', time() - 3600);
                break;
    }
?>
