    <head>
        <meta charset="utf-8">
        <title>42 Shop</title>
        <link rel="stylesheet" href="style.css" />
        <meta content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    </head>
	<div class="topnav" id="myTopnav">
  		<a href="index.php">Home</a>
        <a href="spring_collection.php">Spring Collection</a>
  		<a href="women.php">Women</a>
  		<a href="men.php">Men</a>
        <a href=# id="print" onclick="window.print();" />Print</a>
  		<a href="mycart.php">My Cart</a>
  		<a id=username href="#Login">
    

<?php
if (auth($_POST['login'], $_POST['passwd'], $_SERVER['HTTP_X_FORWARDED_FOR']) != 1 && $_SESSION['user'] == "")
	{	
?>
			<form method="post" action="index.php">
				Username: <input type="text" name="login" value="" />
				<br />
				Password: <input type="password" name="passwd" value="" />
				<input type="submit" name="submit" value="OK" />
			</form>
<?php } ?>

			  	<?php

				if (auth($_POST['login'], $_POST['passwd'], $_SERVER['HTTP_X_FORWARDED_FOR']) == 1 || $_SESSION['user'] != "")
				{
					$myaccount = "myaccount.php";
                    $logout = "logout.php";
                    echo "      <a href='".$myaccount."'>Welcome ". $_SESSION['user'] ." (check my account)</a><p class=logins><a id=username href='".$logout."'<span>Logout</span></a></li></p>";
				}
				else
				echo '<p class=logins> <a id=username href="register.php">Register</a></li></p>';
				?>
		  </a>
	</div>
    <header class="header"><img class="banner" src="https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/banner.jpg" width="100%"></header>