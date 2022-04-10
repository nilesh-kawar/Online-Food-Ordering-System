<?php
	
	session_start();

	if (isset($_SESSION['uid'])) 
	{
		
	}
	else
	{
		header('location: ../login.php');
	}
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
		<a href="../cart.php"><button type="button" class="btn btn-danger mr-3" style="float:right;">CART</button></a>
		<h1 class="text-center text-light">TARMICA'S KITCHEN</h1>
	</div>

	<div class="container bg-dark text-light text-center main">
		<h1 class="pt-4">CHANGE PASSWORD</h1>
		<table align="center" class="mt-5 text-right" >
			<form  action="chngePwd.php" method="post">
			<tr>
				<td>Old Password</td>
				<td><input type="text" name="oldpwd" placeholder="Old Password" value="" required></td>
			</tr>
			<tr>
				<td>New Password</td>
				<td><input type="text" name="pwd" placeholder="Password" value="" required></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="text" name="cpwd" placeholder="Confirm Password" value="" required></td>
			</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" name="submit" value="Change Password" class="btn btn-primary"></td>
			</t>
			</form>
		</table>
	</div>


	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>		
</body>
</html>

<?php
	
	if (isset($_POST['submit'])) 
	{
		include('../dbcon.php');
		$uid = $_SESSION['uid'];
	 	$oldpwd = $_POST['oldpwd'];
		$pwd = $_POST['pwd'];
		$cpwd = $_POST['cpwd'];
		
		$sql = "SELECT `password` FROM `user` WHERE `id` = '$uid'";
		$run = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($run);

		$oldpwdDb = $data['password'];

		if ($oldpwd == $oldpwdDb) 
		{
			if ($pwd == $cpwd) 
			{
				$usql = "UPDATE `user` SET `password` = '$pwd', `cpassword` =  '$cpwd' WHERE `id` = '$uid'";
				$run = mysqli_query($conn, $usql);
				?>
				<script type="text/javascript">
					alert("Password Changed Successfully! Login Again!!");
					window.open('../login.php','_self');
					
				</script>
				<?php	
				session_destroy();
			}
			else
			{
				?>
				<script type="text/javascript">
					alert("Password and Confirm Password not match!");
				</script>
				<?php	
			}
		}
		else
		{
			?>
			<script type="text/javascript">
				alert("Incorrect Current Password!");
			</script>
			<?php	
		}
	}
?>