<?php
function		check($info, $login)
{
	for ($i = 0; $info[$i] != NULL; $i++)
		if ($info[$i]['login'] == $login)
			return(false);
	return(true);
}

if ($_POST['submit'] == "OK" && $_POST['login'] && $_POST['passwd'])
{
	$pw_folder = "../htdocs/private/";
    if (!file_exists($pw_folder))
        mkdir($pw_folder, 0777, true);
    if (!file_exists($pw_folder . "passwd"))
        file_put_contents($pw_folder . "passwd", "");
	$info = unserialize(file_get_contents($pw_folder."passwd"));
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
