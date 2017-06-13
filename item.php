<?php
include ('inc-conn.php');
$sql = "SELECT id, name, currentbid, author, imagepath FROM tbl_items";


if ($results = mysqli_query($conn, $sql))
{
	while ($row = mysqli_fetch_assoc($results))
	{
		echo "
			<div class='item'>
				<img src='http://via.placeholder.com/350x250'>
				<h1>Current Bid ".$row['currentbid']."</h1>
				<h2>".$row['name']. " " .$row['author']."</h2>
				<input type='submit' class='btn-bid' value='bid!''>
				<div class='bidop'>
					<form action='bid-process.php' method='post'>
						<label >Bid amount</label>
						<input type='text' name='bidVal'>


						<input value=".$row["id"]." name='id' hidden>
						<input type='submit' class='btn-bid' value='Bid' name='submit'>
					</form>
				</div>
			</div>";
	}
}
?>

<script>
//HIDE/DISPLAY THE INPUT BOXES ON THE CARDS


</script>