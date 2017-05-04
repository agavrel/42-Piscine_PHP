SELECT last_name, first_name, DATE(birthdate) AS 'birthdate'
FROM user_card WHERE YEAR FROM(birthdate) = 1989 ORDER BY last_name ASC;
