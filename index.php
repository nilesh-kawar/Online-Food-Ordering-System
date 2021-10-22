<?php
session_start();
	if (isset($_SESSION['uid'])) 
	{
		include('dbcon.php');
		$uid = $_SESSION['uid'];
		$query = "SELECT * FROM `user` WHERE `id` = '$uid'";
		$run = mysqli_query($conn, $query);
		$data = mysqli_fetch_assoc($run);
	}
	else{

	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Jhatpat Foods</title>
	<!-- font awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
	<style>
		body{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
		}	
		.main{
			background-image: url('images/img/home.jpg');
			background-repeat: no-repeat;    
			background-size: cover;
			/*position: relative;*/
			width: 100vw;
			height: 100vh;
		}
		.logout a{
			float: right;
			margin: 15px 2px;
			padding: 5px 10px;
			border-radius: 5px;
			border: 1px solid #F44336;
			font-weight: 600;
			text-decoration: none;
			color: #fff;
			background-color: #F44336;
		}
		.log-reg a{
			color: #fff;
			float: right;
			margin: 15px 2px;
			padding: 5px 10px;
			border-radius: 5px;
			border: 1px solid #fff;
			font-weight: 600;
			text-decoration: none;
		}
		.log-reg a:hover{
			color: #000;
			background-color: #fff;
			text-decoration: none;	
		}
		.fa:hover{
			color: #000!important;
		}
		.site-title{
			position: absolute;
			top: 20%;
			left: 50%;
			-webkit-transform: translate(-50%);
			transform: translate(-50%, -50%);
			z-index: 2;
			font-family: 'Knewave', cursive;
		}
		.site-title h1{
			font-size: 5.0rem;
    		line-height: 68px;
    		font-weight: 400;
    		color: #fff;
		}
		.site-yellow-img{
			position: absolute;
			top: 30%;
			left: 50%;
			-webkit-transform: translate(-50%);
			transform: translate(-50%, -50%);
			z-index: 2;
			font-family: 'Knewave', cursive;
		}
		.site-menu{
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%);
			transform: translate(-50%, -50%);
			z-index: 2;
			font-family: 'Montserrat', sans-serif;
		}
		.site-menu a{
			border: 1px solid #fff;
    		border-radius: 15px;
    		padding: 12px 35px;
    		margin: 0 5px;
    		outline: none;
    		color: #fff;
    		font-size: 2rem;
    		font-weight: 600;
    		line-height: 1.4;
    		text-align: center;
    		text-decoration: none;
    		transition: 0.2s;
		}
		.site-menu a:hover{
			border: 1px solid #ff105f;
			outline: none;
			color: #ffffff;
			background: linear-gradient(to left, #ff105f, #ffad06);
			box-shadow: 0 0 30px #ff105f, 0 0 60px #ffad06;
			text-decoration: none;
		}
		.site-steps{
			position: absolute;
			top: 80%;
			left: 50%;
			-webkit-transform: translate(-50%);
			transform: translate(-50%, -50%);
			z-index: 2;
		}
		.overlay{
			background: #000000c7;
			width: 100vw;
			height: 100vh;
			top: 0;
			left: 0;
			z-index: 1;
		}

  		@media screen and (max-width: 968px) and (min-width: 579px){
    		.site-title h1{
    		  font-size: 3.0rem;
    		}
  		}
  		@media screen and (max-width: 579px){
    		.site-title h1{
    		  font-size: 1.7rem;
    		}
    		.site-yellow-img{
    			top: 24%;
    		}
    		.site-steps{
    			top: 70%;
    		}
    		.site-menu{
    			top: 45%;
    		}
  		}
	</style>

</head>
<body>
	<div class="main">
		<div class="logout">
			<?php
				if (isset($_SESSION['uid'])) 
				{
					?><a href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true">&nbsp;</i>Logout</a><?php
				}
				else{
					
				}
			?>
		</div>
		<div class="log-reg">
			<?php
				if (isset($_SESSION['uid'])) 
				{
					?><a href="ulogin/account.php" ><i class="fa fa-user" aria-hidden="true">&nbsp;</i><?php echo $data['name'] ?></a><?php
				}
				else{
					?><a href="login.php" >Login/Sign up</a><?php
				}
			?>
		</div>
		
		<div class="site-title">
			<h1>Jhatpat Foods</h1>
		</div>
		<div class="site-yellow-img">
			<img src="images/img/yellow-str.png" class="img-fluid">
		</div>
		<div class="site-menu">
			<?php
				if (isset($_SESSION['uid'])) 
				{
					?><a href="menu/index.php" >MENU</a><?php
				}else{
					?><a href="menu/menu.php" >MENU</a><?php
				}
				?>
		</div>
		<div class="site-steps">
			<img src="images/img/steps.png" class="img-fluid">
		</div>
		<div class="overlay">
		</div>
	</div>

	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>

</body>
</html>