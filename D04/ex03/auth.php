<?php
    function auth($login, $passwd)
    {
        if (!$login || !$passwd)
            return false;
        $account = unserialize(file_get_contents('../htdocs/private/passwd'));
        if ($account)
            foreach ($account as $v)
                if ($v['login'] === $login && $v['passwd'] === hash('whirlpool', $passwd))
                    return true;
        return false;
    }
?>
