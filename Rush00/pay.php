<?php 
	include "cart.php";
	include "incl/header.php";

	$result = round(total_cart());
	if ($_SESSION['user'] != "")
	{
		if ($result > 0)
			exit("Succes votre commande arrivera dans les prochains jours !");
		else
			exit("Panier vide");
	}
	else
			exit("Veuillez vous connecter avant de finir votre commande");
?>