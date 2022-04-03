<?php
	session_start();

	if (isset($_SESSION['uid'])) 
	{
		
	}
	else
	{
		header('location: ../login.php');
	}

	include('../dbcon.php');
	$uid = $_SESSION['uid'];
	$query = "SELECT * FROM `user` WHERE `id` = '$uid'";
	$run = mysqli_query($conn, $query);
	$data = mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<style>
		body{
			background-image: url('../images/back.jpg');
			background-repeat: no-repeat;    
			background-attachment: fixed;
   		 	background-position: center;
    		background-size: cover;
		}
		.main{
			padding-bottom: 10px;
			border-radius: 15px; 
			margin-top: 50px; 
			opacity: 0.9;
			width: 700px;
		}
		.info
		{
    		display:inline;
    		background-color:#4542f5;
    		color:#fff;
    		opacity: 0.9;
    		border-radius: 5px;
		}
		.tag
		{
			padding: 15px;
			font-weight: 400;
			font-size: 19px;
			text-align: right;
		}
		.data
		{
			padding: 9px;
			font-weight: 600;
			font-size: 19px;
			text-align: left;
		}
	</style>
</head>
<body>
	
	<div class="bg-dark pt-3 pb-3">
		<a href="../index.php"><button type="button" class="btn btn-success ml-3" style="float:left;">HOME</button></a>
		<a href="../menu/cart.php"><button type="button" class="btn btn-danger mr-3" style="float:right;">CART</button></a>
		<h1 class="text-center text-light">Tarmicas Kitchen</h1>
	</div>

	<div class="text-center pt-5">
		<h1 class="info">ACCOUNT INFORMATION</h1>
	</div>

	<div class="container bg-dark text-light text-center main">

		<h1><?php echo "Welcome ".$data['name'] ?></h1>

		<table align="center" >
			<tr>
				<td class="tag">Name:</td>
				<td class="data"><?php echo $data['name'] ?></td>
			</tr>
			<tr>
				<td class="tag">Mobile No.:</td>
				<td class="data"><?php echo $data['mobile'] ?></td>
			</tr>
			<tr>
				<td class="tag">Hostel & room number eg EG21:</td>
				<td class="data" width="300"><?php echo $data['address'] ?></td>
			</tr>
			<tr>
				<td class="tag">Email:</td>
				<td class="data"><?php echo $data['email'] ?></td>
			</tr>
			<tr>
				<td><a href="editInfo.php"><button class="btn btn-primary">Edit Information</button></a></td>
				<td><a href="chngePwd.php"><button class="btn btn-primary">Change Password</button></a></td>
			</tr>
		</table>
	</div>


	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>		
</body>
</html>