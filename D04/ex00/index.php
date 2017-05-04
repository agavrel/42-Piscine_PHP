<?php
session_start();
if ($_GET['submit'] == 'OK')
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}
?>
<html><body>
<form method=“get” action=“index.php”>
   Username: <input type=“text” name=“login” value=“” />
   <br />
   Password: <input type=“password” name=“passwd” value=“” />
  <input type=“submit” name=“submit” value=“OK” />
</form>
</body></html>
