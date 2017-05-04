INSERT INTO ft_table (login, creation_date, groupe)
SELECT last_name, birthdate, "other" FROM user_card 
WHERE last_name LIKE '%a%' && (LENGTH(last_name) < 9) ORDER BY last_name ASC LIMIT 10;
