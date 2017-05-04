#!/usr/bin/php
<?php
	function ft_strlen($str)
	{
		$i = 0;
		while ($str[$i] != NULL)
			$i++;
		return $i;
	}
    function ft_isalpha($c)
    {
        return (((ord($c) >= 65) && (ord($c) <= 90)) || ((ord($c) >= 97) && (ord($c) <= 122)));
    }
    function ft_strcmp($s1, $s2)
    {
        $i = 0;
	    while ($s1[$i] == $s2[$i] && $s1[$i])
		    $i++;
        return (ord($s1[$i]) - ord($s2[$i]));
    }
	function ssap_cmp($a, $b)
	{
		if (ft_isalpha($a))
			$n = 1;
		else if (is_numeric($a) && $a != '-')
			$n = 2;
		else
			$n = 3;
		if (ft_isalpha($b))
			$n2 = 1;
		else if (is_numeric($b) && $b != '-')
			$n2 = 2;
		else
			$n2 = 3;
		if ($n == $n2)
		{
			if (ft_strcmp($a, $b) > 0)
				return (-1);
			else if (!ft_strcmp($a, $b))
				return (0);
			else
				return (1);
		}
		else if ($n > $n2)
			return (-1);
		else
			return (1);
	}
	function sort_ssap($a, $b)
	{
		$len1 = ft_strlen($a);
		$len2 = ft_strlen($b);
		$len = min($len1, $len2);
		for ($i = 0; $i < $len;)
		{
			if (!ssap_cmp($a[$i], $b[$i]))
				$i++;
			else
				return (ssap_cmp($a[$i], $b[$i]));
		}
		if ($len1 <= $len2)
			return (1);
		else 
			return (-1);
	}
	if ($argc < 2)
		return (false);
	unset($argv[0]);
	$tmp = implode(" ", $argv);
    while (1)
    {
        $tmp2 = str_replace("  ", " ", $tmp);
        if ($tmp2 == $tmp)
            break ;
        $tmp = $tmp2;
    }
	$str = explode(" ", $tmp);
	for ($i = 0; $i < count($str) - 1;)
	{
		if (sort_ssap(strtolower($str[$i]), strtolower($str[$i + 1])) > -1)
		{
			$i++;
		}
		else
		{
			$tmp = $str[$i];
			$str[$i] = $str[$i + 1];
			$str[$i + 1] = $tmp;
			$i = 0;
		}
	}
	foreach ($str as $elem)
		echo $elem."\n";
?>
