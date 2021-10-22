<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Jhatpat Foods</title>
	<!-- font awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
	<!-- Increament & Decreament JS -->
	<script type="text/javascript" src="../javascript/quantity_inc_dec.js"></script>
	<style>
		body{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
			/*background: #0000007a;*/
		}
		.main-menu{
			width: 100%;
			position: relative;
		}
		.inner-menu{
			padding: 25px 15px;
			background: #000000b0;
			color: #fff;
			height: 25px;
			background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('images/navbar-bg.jpg');
			background-repeat: no-repeat;    
			background-size: cover;
			z-index: -9999;
		}
		.logo{
			position: absolute;
			left: 50%;
			top: 25%;
			content: "";
			-webkit-transform: translate(-50%);
		}
		.logo img{
			height: 50px;
		}
		.inner-menu a{
			color: #fff;
			padding: 5px 10px;
			border-radius: 5px;
			border: 1px solid #fff;
			font-weight: 600;
			text-decoration: none;
		}
		.inner-menu a:hover{
			color: #000;
			background-color: #4CAF50;;
			text-decoration: none;	
		}
	</style>
</head>
<body>
	<div class="main-menu sticky-top">
		<div class="logo">
			<img src="images/logo.png" class="img-fluid">
		</div>
		<div class="inner-menu sticky-top">
			<a href="../index.php" style="float: left;">HOME</a>
			<a href="cart.php" style="float: right;">CART 
			<?php
			if (isset($_SESSION['cart'])) 
			{
				$count = count($_SESSION['cart']);
				echo "<span><b>$count</b></span>";
			}
			else
			{
				echo "<span><b>0</b></span>";
			}
			?>
			</a>	
		</div>
	</div>