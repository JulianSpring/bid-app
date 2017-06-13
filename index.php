<?php session_start(); ?>
<?php
	if(isset($_SESSION['loggedin']))
		header('Location: home.php');
?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">

<!-- THIS CODE TELLS MOBILE DEVICES NOT TO ZOOM OUT BY DEFAULT -->
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Landing Page</title>

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

<!-- LINK TO EXTERNAL CSS FILE -->
<link href="css/public.css" rel="stylesheet" type="text/css">

</head>

<body>

<header>
	<h1>Fish Art</h1>
</header>

<section class="wrapper">
	<h1>Welcome</h1>
	<p>Short what this site is about</p>


	<div class="btnpos">
		<a class='btn-signup'>Sign-up</a>
		<a class='btn-explore' href='home.php'>Explore Abit</a>
	</div>

	<div class="hiddenform">

		<div class="signup">
			<?php require ('sign-up.php'); ?>
		</div>

		<div class="login">
			<?php require ('login.php'); ?>
		</div>

	</div>

	
	

</section>
<script type="text/javascript">

$(".hiddenform").hide();

$(document).ready(function(){
    $(".btn-signup").click(function(){

    	$(".hiddenform").slideToggle();
    });
});

</script>
</body>
</html>
