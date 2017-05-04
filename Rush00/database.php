<?php
	session_start();

	function secure($string)
	{
		$string = htmlspecialchars($string);
		return ($string);
	}

	function connect() {
		$server = "localhost";
		$user = "root";
		$pass = "toor";
		$con = mysqli_connect($server, $user, $pass);
		if (!$con)
			die("Connection failed");
		else
			return ($con);
	}
?>

