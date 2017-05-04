<?php include "auth.php"; ?>
<!DOCTYPE html>
<?php
function		connect_4()
{
	$link = mysqli_connect("localhost", "root", "toor", "db_test", "8080");
	if (mysqli_connect_errno())
		echo "Failed to connect to MySQL database : " . mysqli_connect_error();
	return ($link);
}
?>

<html>
   <?php include "incl/header.php"; ?>
	
<body class="product">
    
<?php 
    $link = connect_4();
    if ($_POST['submit'] == "Add Product")
	{
        $name = $_POST['name'];
        $img_url = $_POST['img_url'];
        $price = $_POST['price'];
        $sexe = $_POST['sexe'];
        $type = $_POST['type'];
		$query = "INSERT INTO products VALUES (null, '" . mysqli_real_escape_string($link, $name) . "', '" . mysqli_real_escape_string($link, $img_url) . "', '" . mysqli_real_escape_string($link, $price). "', '" . mysqli_real_escape_string($link, $sexe) . "', '" . mysqli_real_escape_string($link, $type) . "');";
        var_dump($query);
        var_dump(mysqli_query($link, $query));
	}
?>



<div style="margin-top: 5vh; margin-left: 5vw;">
	<form method="post" action="add_product.php">
			<span>Product name :&nbsp;<input class="field" type="text" name="name" required="true"></span><br /><br />
			<span>Image URL :&nbsp;<input class="field" type="text" name="img_url" required="true"></span><br /><br />
			<span>Price :&nbsp;<input class="field" type="number" step=0.01 name="price" required="true"></span><br /><br />
			<span>Sexe :&nbsp;
				<select name="sexe" style="width: 120px; height: 2vh;">
					<option value="men">men</option>
					<option value="women">women</option>
				</select>
			</span><br /><br />
			<span>Type :&nbsp;
				<select name="type" style="width: 120px; height: 2vh;">
					<option value="scarf">Scarf</option>
					<option value="pull">Pullover</option>
                    <option value="glasses">Glasses</option>
				</select>
			</span><br /><br />
			<input class="button" type="submit" name="submit" value="Add Product">
	</form>
	</div>


</body>
</html>
