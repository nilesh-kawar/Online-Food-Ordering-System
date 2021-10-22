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
	</style>
</head>
<body>
	
	<div class="bg-dark pt-3 pb-3">
		<a href="account.php"><button type="button" class="btn btn-success ml-3" style="float:left;">BACK</button></a>
		<a href="log-reg.php"><button type="button" class="btn btn-danger mr-3" style="float:right;">CART</button></a>
		<h1 class="text-center text-light">JHATPAT FOODS</h1>
	</div>

	<div class="container bg-dark text-light text-center main">
		<h1 class="pt-4">EDIT INFORMATION</h1>
		<table align="center" class="mt-5 text-right" >
			<form action="editInfo.php" method="post">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" placeholder="Name" value="<?php echo $data['name'] ?>" required></td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td><input type="number" name="mobile" placeholder="Mobile Number" value="<?php echo $data['mobile'] ?>" required></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><textarea name="address" style="width: 178px;"  required><?php echo $data['address'] ?></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<br>
						<input type="submit" name="submit" value="Update" class="btn btn-primary">
					</td>
				</tr>
			</form>
		</table>
	</div>


	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>
	
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
	
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];

		$uquery = "UPDATE `user` SET `name`= '$name',`mobile`= '$mobile',`address`= '$address' WHERE `id`= '$uid'";
		$urun = mysqli_query($conn, $uquery);

		if ($urun == true) 
		{
			?>

			<script>
				alert("Information Updated Successfully !");
				window.open('account.php','_self');
			</script>

			<?php
		}
		else
		{
			echo "ERROR: $uquery. " . mysqli_error($conn);
		}
	}
?>