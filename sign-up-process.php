<?php

session_start();
if (isset($_POST['submit']))
{
	$firstname = $_POST['firstname'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$conpwd = $_POST['conpwd'];

	if ($pwd != $conpwd)
	{
		echo 'Passwords do not match';
		exit();
	}

	
	$pwd = password_hash($pwd, PASSWORD_DEFAULT);

	// STILL NEED TO CHECK IF EMAIL IS IN USE
	// USING EMAIL AS UNIQE KEY
	// EMIAL IS UNIQUE IN DATABASE
	include ('inc-conn.php');
	$sql = "INSERT INTO tbl_user (name, email, password)
			VALUES ('$firstname', '$email', '$pwd')";

	if (mysqli_query($conn, $sql))
	{
		
		$_SESSION['loggedin'] = $email;
		$_SESSION['name'] = $firstname;
		header('Location: home.php');
	}
 	else
 	{
 		echo 'error ' . mysqli_error($conn).'<br>';
 		echo 'Added <a href="index.php">Go Back</a>';
 	}

 	mysqli_close($conn);
}
?>