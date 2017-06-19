<?php
include ('inc-conn.php');
session_start();

if (isset($_POST['submit']) && isset($_SESSION['loggedin']))
{ 
	$id = $_POST['id'];
	$bidVal = $_POST['bidVal'];
	$bidder = $_SESSION['loggedin'];

	$sql = "SELECT currentbid FROM tbl_items WHERE id='$id'";

	if ($results = mysqli_query($conn, $sql))
	{
		$row = mysqli_fetch_assoc($results);
		$currentbid = $row['currentbid'];

		if ($currentbid >= $bidVal)
		{
			echo 'that value is not high enough <a href="home.php">Go Back</a>';
		}
		else
		{
			$sql = "UPDATE tbl_items SET currentbid = '$bidVal', highestbidder = '$bidder' WHERE id = '$id'";

			if (mysqli_query($conn, $sql))
			{
				echo "thank you for bidding <a href='home.php'>Go Back Home</a>";
			}
			else
			{
				echo "Error " . mysqli_error($conn);
			}

			
		}
	}
	else
	{
		echo 'error'. mysqli_query($conn);
	}
}
else
	echo "login in please";


?>