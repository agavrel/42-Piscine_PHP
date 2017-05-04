<?php 
	include "cart.php"; 
	include "incl/header.php";
	if ($_POST['submit'] == "Add to cart" || $_POST['submit'] == "Remove to cart")
    {
        if ($_POST['submit'] == "Add to cart")
            add_elem($_POST['id'], "");
        if ($_POST['submit'] == "Remove to cart")
            rm_elem($_POST['id'], "");
    }
?>
<form method=post action="pay.php">
<input class="button" type="submit" name="checkout" value="Checkout <?php echo total_cart(); ?> €">
</form>

<?php read_cart(); ?>

