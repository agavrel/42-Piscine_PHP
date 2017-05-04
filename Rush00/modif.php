<?php include "auth.php"; 
	
	if ($_POST['login'] && $_POST['oldpw'])
	{
		if (modif($_POST['login'], $_POST['oldpw'], $_POST['newpw']) == 1)
		{?>
			<center><?php echo "Success mot de passe modifier"; ?></center>
<?php	}
		else
		{?>
			<center><?php echo "Une erreur est survenue"; ?></center>
<?php	}
	}
?>

<!DOCTYPE html>
<html>
   <?php include "incl/header.php"; ?>
	

	<body>
		<form action="modif.php" method="post">
			username: <input type="text" name="login"><br />
			old password: <input type="password" name="oldpw"><br />
			new password: <input type="password" name="newpw"><br />
			<input type="submit" name="reset" value="OK">
		</form>
	</body>
</html>

