<?php
	
	include('../dbcon.php');

	$sid = $_GET['sid'];

	$query = "SELECT * FROM `menu` WHERE `id` = $sid";
	$run = mysqli_query($conn, $query);
	$data = mysqli_fetch_assoc($run);
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Add new Item</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<style type="text/css">
		.abc{
			border-radius: 50px; 
			padding-bottom: 50px;
			margin-left: 50px;
			margin-right: 50px;
			background-color: #24262dd9;
		}
	</style>
</head>
<body>
	<div align="center" class="bg-dark text-light pt-4 pb-4">
		<a href="../logout.php"><button style="float: right;" class="btn btn-danger mr-3">LOGOUT</button></a>
		<a href="menudb.php"><button style="float: left;" class="btn btn-success ml-3"><< BACK</button></a>
		<h1>WELCOME TO ADMIN DASHBOARD</h1>	
	</div>


	<div class="text-light abc">
		<div class="text-center mt-5 pt-5" >
			<h1>UPDATE ITEM DETAILS</h1>
		</div>
	
		<table align="center" style="margin-top: 50px; margin-right: 400px;" cellpadding="3">
			<form action="updateitem2.php" method="post" enctype="multipart/form-data">
				<tr>
					<td>Item No.</td>
					<td>
						<input type="number" name="item_no"  value="<?php echo $data['item_no']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Name</td>
					<td>
						<input type="text" name="name" value="<?php echo $data['name']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>
						<input type="text" name="type" value="<?php echo $data['type']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Detail</td>
					<td>
						<textarea cols="22" name="detail" required=""><?php echo $data['detail']; ?></textarea>
					</td>
				</tr>
				<tr>
					<td>Price</td>
					<td>
						<input type="number" name="price" value="<?php echo $data['price']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Image</td>
					<td>
						<input type="file" name="simg" required>
					</td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<br><input type="submit" name="submit" value="UPDATE" class="btn btn-success" style="margin-right:	 75px; width: 150px;">
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

