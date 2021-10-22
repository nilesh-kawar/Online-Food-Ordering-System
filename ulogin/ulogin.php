<?php
session_start();

	if (isset($_SESSION['uid'])) 
	{
		
	}
	else
	{
		header('location: ../index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Jhatpat Foods </title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

	<style>
		body{
			background-image: url('../images/background.jpeg');
			background-repeat: no-repeat;    
			background-attachment: fixed;
   		 	background-position: center;
    		background-size: cover;
		}
		.main{
			border-radius: 15px; 
			margin-top: 100px; 
			opacity: 0.9;
			width: 700px;
		}
	</style>
</head>
<body>
	<div class=" bg-dark pt-3 pb-3">
		<a href="index.php"><button type="button" class="btn btn-success ml-3" style="float:left;">HOME</button></a>
		<a href="user.php"><button type="button" class="btn btn-danger mr-3" style="float:right;">USER</button></a>
		<h1 class="text-center text-light">JHATPAT FOODS</h1>
	</div>

	<div class="container bg-dark text-light text-center main">
		<h3 class="pt-3">We are available only at the following regions.</h3>
		<h4>Please select any one:</h4>

		<div>
			<a href="../menu/menu.php"><button type="button" class="btn btn-primary my-3 px-5">Vashi</button></a><br>
			<a href="../menu/menu.php"><button type="button" class="btn btn-primary my-3 px-5">Panvel</button></a><br>
			<a href="../menu/menu.php"><button type="button" class="btn btn-primary my-3 px-5">Thane</button></a><br>
		</div>
	</div>





	<script src="../bootstrap/jss/jquery.min.js"></script>
	<script src="../bootstrap/jss/popper.min.js"></script>
	<script src="../bootstrap/jss/bootstrap.min.js"></script>

</body>
</html>