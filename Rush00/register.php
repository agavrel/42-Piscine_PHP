<?php
	include "auth.php";
	include "incl/header.php";

	if ($_POST['n_login'] && $_POST['n_passwd'])
	{
		if (create($_POST['n_login'], $_POST['n_passwd'], "10.0.0.0.1") == 1)
		{?>
			<center><?php echo "Success vous pouvez desormais vous connecter"; ?></center>
<?php	}
		else
		{?>
			<center><?php echo "Une erreur est survenue"; ?></center>
<?php	}
	}
?>
	<form style="padding-left: 500px; padding-top: 50px;" method="post" action="register.php">
				Username: <input type="text" name="n_login" value=""/>
				<br />
				Password: <input type="password" name="n_passwd" value=""/>
				<input type="submit" name="submit" value="OK" />
	</form>