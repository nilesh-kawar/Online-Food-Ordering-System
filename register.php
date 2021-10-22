<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Signup</title>
	<!-- font awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<style>
		body{
			margin: 0;
			padding: 0;
			background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('images/pizza.jpg');
			background-repeat: no-repeat;    
			background-size: cover;
			box-sizing: border-box;
			z-index: -9999;
			height: 100vh;
		}
		}	
		a{
			text-decoration: none;
		}
		a:hover{
			text-decoration: none;
		}
		.wrap{
			top: 5%;
			position: relative;
			max-width: 350px;
			border-radius: 20px;
			margin: auto;
			background: rgba(0,0,0,0.8);
			padding: 20px 40px;
			color: #fff;
			box-sizing: border-box;
			z-index: 999;		
		}
		h2{
			text-align: center;
		}
		h6{
			text-align: center;
			padding: 5px 1px;
		}
		input[type=text], input[type=number], input[type=email], input[type=text], textarea, input[type=password]{
			width: 100%;
			box-sizing: border-box;
			padding: 12px 5px;
			background: rgba(0,0,0,0.10);
			outline: none;
			border: none;
			border-bottom: 1px solid #fff;
			color: #fff;
			border-radius: 5px;
			margin: 5px;
			font-weight: bold;
		}
		input[type=submit]{
			width: 100%;
			box-sizing: border-box;
			padding: 10px 0;
			margin-top: 30px;
			outline: none;
			border: none;
			background: linear-gradient(to right, #ff105f, #ffad06);
			border-radius: 20px;
			font-size: 20px;
			color: #fff;
		}
		input[type=submit]:hover{
			background: linear-gradient(to left, #ff105f, #ffad06);
		}
		@media screen and (max-width: 579px){
    		.wrap{
    		  top: 10%;
    		}
    	}
	</style>
</head>
<body>
	<div class="wrap">
		<h2>Register</h2>
		<form action="register.php" method="post">
			<input class="" type="text" name="name" value="" placeholder="Name" required>

			<input class="" type="number" name="mobile" value="" placeholder="Mobile Number" required>

			<input class="" type="email" name="email" value="" placeholder="Email" required>

			<textarea class="" name="address" placeholder="Address" required></textarea>
			
			<input class="" type="password" name="password" value="" placeholder="Password" required>

			<input class="" type="password" name="cpassword" value="" placeholder="Confirm Password" required>

			<input type="submit" name="submit" value="Register" class="">

			<h6 class="pt-3">Aleready Have an Acccount? <a href="login.php">Login</a></h6>
		</form>
	</div>
	
	
	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>
</body>

<?php

	if (isset($_POST['submit'])) 
	{
		include('dbcon.php');
	
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		if ($password != $cpassword) 
		{
			?>
			<script type="text/javascript">
				alert("Password and Confirm Password not match!");
			</script>
			<?php	
			die();
		}

		$esql = "SELECT 1 FROM `user` WHERE `email` = '$email'";
		$erun = mysqli_query($conn, $esql);

		if (mysqli_num_rows($erun) > 0) 
		{
			?>
			<script type="text/javascript">
				alert("Email Aleready Exist!");
			</script>
			<?php	
			die();
		}
		
		$sql = "INSERT INTO `user`(`name`, `mobile`, `address`, `email`, `password`, `cpassword`) VALUES ('$name', '$mobile', '$address', '$email', '$password', '$cpassword')";
		$run = mysqli_query($conn, $sql);
		
		if ($run == true) 
		{
			?>

			<script>
				alert("User Registration Successfully !");
				window.open('login.php','_self')
			</script>

			<?php
		}
		else
		{
    		echo "ERROR: $sql. " . mysqli_error($conn);
		}
	}
?>