<?php
function		checker($data, $login, $oldpw)
{
	$i = 0;
	while ($data[$i] != NULL)
	{
		if ($data[$i]['login'] == $login && $data[$i]['passwd'] == $oldpw)
			return (true);
		$i++;
	}
	return (false);
}

if ($_POST['submit'] == 'OK'
	&& $_POST['login']
	&& $_POST['oldpw']
	&& $_POST['newpw']
	&& ($_POST['oldpw'] != $_POST['newpw'])
	&& (file_exists("../htdocs/private/passwd")))
{
	$data = unserialize(file_get_contents("../htdocs/private/passwd"));
	$oldpasswd = hash('whirlpool', $_POST['oldpw']);
	if (!(checker($data, $_POST['login'], $oldpasswd)))
		echo "ERROR\n";
	else
	{
		$i = 0;
		while ($data[$i] != NULL)
		{
			if ($data[$i]['login'] == $_POST['login'])
			{
				$data[$i]['passwd'] = hash('whirlpool', $_POST['newpw']);
				break ;
			}
			$i++;
		}
		file_put_contents("../htdocs/private/passwd", serialize($data));
		echo "OK\n";
	}
}
else
	echo "ERROR\n";
?>
