<?php
	include "cart.php";
	if ($_POST['login'] != "" && $_POST['passwd'] != "")
	{
		if (auth($_POST['login'], $_POST['passwd'], "none") == 1)
			$_SESSION['user'] = $_POST['login'];
	}
	if ($_SESSION['init'] == "")
		init_cart();
?>

<!DOCTYPE html>
<html>

<?php include 'incl/header.php'; ?>
     <body>
	
    	<section class="sidenav">
			<article class="active" id="Home" s style="background-image:url('https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/scarf_new.jpg');color:white;">
				<p>Spring Collection !</p>
			</article>
			<article id="Women" style="background-image:url('https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/scarf2.jpg');color:white;">
				<p>Women</p>
			</article>
			<article id="Men" style="background-image:url('https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/scarf1.jpg');color:white;">
				<p><a href="men.php">Men</p>
			</article>
			<article style="background-image:url('https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/scarf3.jpg');color:white;">
				<p><a href="register.php">Login</p><p><a href="register.php">Register</p>
			</article>
		</section>		
	</body>
</html>
