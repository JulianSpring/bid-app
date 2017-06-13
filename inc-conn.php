<?php

/*$server 	= '197.242.144.19';
$user 		= 'juliawvv_fishpro';
$password 	= 'R]8eWuv6Nv{O';
$db 		= 'juliawvv_fish';
*/
$server 	= 'localhost';
$user 		= 'admin';
$password 	= 'password';
$db 		= 'db_fishproject';
$error      = 'Something went wrong with the server try again later';

$conn = mysqli_connect($server, $user, $password, $db);

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	//header('Location: http://juilanspring/index.php');
	exit();
}