<?php session_start(); ?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">

<!-- THIS CODE TELLS MOBILE DEVICES NOT TO ZOOM OUT BY DEFAULT -->
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Home</title>

<!-- HTML5 AND CSS3 MEDIA QUERY FALL BACKS FOR IE8 AND OLDER -->
<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdn.jsdelivr.net/css3-mediaqueries/0.1/css3-mediaqueries.min.js"></script>
<![endif]-->

<!-- LOAD FONT AWESOME STYLESHEET -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- LOAD GOOGLE FONT (ROBOTO) STYLESHEET  -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic">

<!-- LOAD EXTERNAL jQUERY LIBRARY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

<!-- LOAD CUSTOM JAVASCRIPT FILE -->
<script src="javascript/main.js"></script>

<!-- LINK MODAL WINDOW -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
		
<link rel="stylesheet" href="css/style.css">

<!-- LINK TO EXTERNAL CSS FILE -->
<link href="css/public.css" rel="stylesheet" type="text/css">

</head>

<body>

<header>
	<h1>Home</h1>
	<?php
	if (isset ($_SESSION['loggedin']))
	{
		echo 'welcome ' . $_SESSION['name'].'<br>';
		echo '<a href="logout.php">Logout</a>';
	}
	else
	{
		echo '<a id="modal_trigger" href="#modal" class="btn-signup">Sign-Up/Login</a>';
	}

	?>
</header>
<div class="login">
	<?php require ('login.php'); ?>
</div>


<section class="content">
	<?php include ('item.php'); ?>
</section>

</body>
</html>