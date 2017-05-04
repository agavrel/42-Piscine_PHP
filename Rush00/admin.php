<?php
	include "auth.php";
	
	function add_element($nom, $img, $price, $category, $sub)
	{
		if (!$nom || !$img || !$price || !$category || !$sub)
			return (0);
		$nom = secure($nom);
		$img = secure($img);
		$price = secure($price);
		$category = secure($category);
		$sub = secure($sub);
		$con = connect();
		if (!mysqli_select_db($con, "db_test"))
			return (0);
		$query = mysqli_query($con, "INSERT INTO products VALUES (NULL,'".$nom."', '".$img."', '".$price."', '".$category."', '".$sub."')");
		return (1);
	}

	function rm_element($nom)
	{
		$con = connect();
		if (!mysqli_select_db($con, "db_test"))
			return (0);
		$query = mysqli_query($con, "DELETE FROM products WHERE title='".$nom."'");
		return (1);
	}
?>
