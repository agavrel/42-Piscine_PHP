#!/usr/bin/php
<?php
session_start();
$_SESSION['database'] = "on";
$link = mysqli_connect("localhost", "root", "toor", "", "8080");
if (mysqli_connect_errno())
	echo "Failed to connect to MySQL : " . mysqli_connect_error();
mysqli_query($link, "CREATE DATABASE IF NOT EXISTS db_rush;");
mysqli_query($link, "use db_test");
mysqli_query($link, "CREATE TABLE IF NOT EXISTS users
(
	id_user INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	login VARCHAR(32) NOT NULL,
	password VARCHAR(128) NOT NULL,
	ip VARCHAR(32) NOT NULL,
	admin int(11) NOT NULL
);");
mysqli_query($link, "CREATE TABLE IF NOT EXISTS products
(
	id_product INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	title VARCHAR(64) NOT NULL,
	img_url VARCHAR(512) NOT NULL,
	price DECIMAL(10, 2) NOT NULL,
	category VARCHAR(128) NOT NULL,
	sub_category VARCHAR(128)
);");
if (mysqli_num_rows(mysqli_query($link, "SELECT * FROM products")) == 0)
{
	mysqli_query($link, "INSERT INTO products
	VALUES(null, 'tropcherpourtoi', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/scarf1.png', '85.95', 'men', 'scarf'),
(null, 'pourlesradasses', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/scarf2.png', '145.95', 'women', 'scarf'),
(null, 'pourlespauvres', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/scarf3.png', '1.95', 'men', 'scarf'),
(null, 'made_by_grandma', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/scarf4.png', '25.95', 'men', 'scarf'),
(null, 'old_fashion', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/scarf5.png', '15.95', 'women', 'scarf'),
(null, 'he_will_be_back', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/pull1.png', '115.95', 'women', 'pull'),
(null, 'nice_one', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/pull2.png', '135.95', 'women', 'pull'),
(null, 'high_education', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/pull3.png', '115.95', 'women', 'pull'),
(null, 'bad_boy', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/pull4.png', '95.95', 'men', 'pull'),
(null, 'Vanilla', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/glasses1.png', '15.95', 'women', 'glasses'),
(null, 'Special_Keke', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/glasses2.png', '45.95', 'women', 'glasses'),
(null, 'Plus_didee', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/glasses3.png', '23.95', 'women', 'glasses'),
(null, 'Marvelous', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/glasses4.png', '69.95', 'men', 'glasses'),
(null, 'Macho', 'https://raw.githubusercontent.com/agavrel/42-Projects/master/Piscine_PHP/Rush00/resources/glasses5.png', '12.95', 'men', 'glasses');");
}
if (mysqli_num_rows(mysqli_query($link, "SELECT * FROM users")) == 0)
{
	mysqli_query($link, "INSERT INTO users
	VALUES (null, 'root', 'ce5ca673d13b36118d54a7cf13aeb0ca012383bf771e713421b4d1fd841f539a', '10.0.0.1', '1')
	;");
}
echo "Succes";
?>