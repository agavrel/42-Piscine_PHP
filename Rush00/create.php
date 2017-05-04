<?php
function		check($info, $login)
{
	for ($i = 0; $info[$i] != NULL; $i++)
		if ($info[$i]['login'] == $login)
			return(false);
	return(true);
}


function		connect()
{
	$link = mysqli_connect("localhost", "root", "root", "db_test", "8080");
	if (mysqli_connect_errno())
		echo "Failed to connect to MySQL database : " . mysqli_connect_error();
	return ($link);
}



function		display_products($link, $category)
{
	$result = mysqli_query($link, "SELECT product FROM category WHERE category = '" . mysqli_real_escape_string($link, $category) . "'");
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		?><html><div><?= $row['product']?></div><br /></html><?php	
}



function		check_alrd_registered_users($link, $login, $passwd)
{
	$result = mysqli_query($link, "SELECT login  FROM users WHERE login = '" . mysqli_real_escape_string($link, $login) . "'");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);	
	if ($row['login'] === $login)
		return false;
	#if (mysqli_num_rows(mysqli_query($link, "SELECT login  FROM users WHERE login = '" . mysqli_real_escape_string($link, $login) . "'")) == 0)
		#return true;
	return true;		
}

if ($_POST['submit'] == "OK" && $_POST['login'] && $_POST['passwd'])
{

	$link = connect_to_database();
	check_alrd_registered_users($link, $_POST['login'], $_POST['passwd'])
	if ((check($info, $_POST['login'])) == false)
		echo "ERROR\n";
	else
	{
		$data[] = ['login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['passwd'])];
		file_put_contents($pw_folder . "passwd", serialize($data));
		echo "OK\n";
	}
}
else
	echo "ERROR\n";
?>
