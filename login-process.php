<?php
include ('inc-conn.php');
session_start();
if (isset ($_POST['submit']))
{
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$sql = "SELECT name, email, password FROM tbl_user WHERE email='$email'";

	if ($result = mysqli_query($conn, $sql))
	{
		$userdata = mysqli_fetch_assoc($result);

		if (password_verify($pwd, $userdata['password']))
		{
			
			$_SESSION['loggedin'] = $userdata['email'];
			$_SESSION['name'] = $userdata['name'];
			header('Location: home.php');
		}
		else
		{
			echo 'incorect email or passoword';
			echo '<a href="index.php">Re-enter data</a>';
		}
	}
	else 
	{
		echo 'error ' . mysqli_error($conn);
	}
}