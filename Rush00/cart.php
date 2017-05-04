<?php
	include "auth.php";
	function init_cart()
	{
		$_SESSION['init'] = "init";
		$con = connect();
			if (!mysqli_select_db($con, "db_test"))
				return (0);
		$elements = mysqli_num_rows(mysqli_query($con, "SELECT * FROM products"));
		for ($i=1; $i < $elements + 1; $i++) { 
			if (!$_SESSION["'".$i."'"])
				$_SESSION["'".$i."'"] = 0;
		}
	}

	function add_elem($id, $q)
	{
		if ($q > 0)
			$_SESSION["'".$id."'"]+= $q;
		else
			$_SESSION["'".$id."'"]++;
	}

	function rm_elem($id, $q)
	{
		if ($q > 0)
			$_SESSION["'".$id."'"] -= $q;
		else
			$_SESSION["'".$id."'"]--;
	}

	function total_cart()
	{
		$total = 0;
		$con = connect();
		if (!mysqli_select_db($con, "db_test"))
			return (0);
		foreach ($_SESSION as $key => $value)
		{
			$key = str_replace("'", "", $key);
			$result = mysqli_query($con, "SELECT * FROM products WHERE id_product='".$key."'");
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$total += $value * $row['price'];
		}
		return ($total);
	}

	function read_cart()
	{
		$con = connect();
		if (!mysqli_select_db($con, "db_test"))
			return (0);
		foreach ($_SESSION as $key => $value) 
		{
			$key = str_replace("'", "", $key);
			if ($value > 0)
			{
				$result = mysqli_query($con, "SELECT * FROM products WHERE id_product='".$key."'");
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
						<form method="post" action="mycart.php">
		
				           		 <div class="item">
					                <div><img width="290px" height="400px" src="<?= $row['img_url']; ?>"></div>
					                <div><span><?= $row['title']; ?></span></div>
					                <div><span><?= $value?></span></div>
					                <div><span><?= $row['price'] * $value; ?>€</span></div>
					                <div><input type="hidden" name="id" value="<?= $row['id_product']; ?>"></div>
					                <div><input type="hidden" name="price" value="<?= $row['price']; ?>"></div>
					                <div><input class="button" type="submit" name="submit" value="Add to cart"></div>
					                <div><input class="button" type="submit" name="submit" value="Remove to cart"></div>
				           		</div>
			        		
		       			</form>
<?php 		}	
	    }
	}


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
		$query = mysqli_query($con, "DELETE FROM products WHERE id_product='".$nom."'");
		return (1);
	}

	function read_cart_admin()
	{
		$link = connect();
		if (!mysqli_select_db($link, "db_test"))
			return (0);
		$result = mysqli_query($link, "SELECT * FROM products");
    if ($_POST['submit'] == "filter" && $_POST['category'] != "All")
      $result = mysqli_query($link, "SELECT * FROM products");
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
    ?>
        <div id="addprod">
        <form method="post" action="myaccount.php">
            <div class="item">
                <div><img width="290px" height="400px" src="<?= $row['img_url']; ?>"></div>
                <div><span><?= $row['title']; ?></span></div>
                <div><span><?= $row['price']; ?>€</span></div>
                <div><input type="hidden" name="id" value="<?= $row['id_product']; ?>"></div>
                <div><input type="hidden" name="price" value="<?= $row['price']; ?>"></div>
                <div><input class="button" type="submit" name="submit" value="Remove this Product"></div>
            </div>
        </form>
        </div>
    <?php 
    }
    ?>

   <?php } 

?>