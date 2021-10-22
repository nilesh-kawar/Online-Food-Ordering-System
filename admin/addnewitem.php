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
		<a href="admindash.php"><button style="float: left;" class="btn btn-success ml-3"><< BACK</button></a>
		<h1>WELCOME TO ADMIN DASHBOARD</h1>	
	</div>


	<div class="text-light abc">
		<div class="text-center mt-5 pt-5" >
			<h1>ADD NEW ITEM</h1>
		</div>
	
		<table align="center" style="margin-top: 50px; margin-right: 400px;" cellpadding="3">
			<form action="addnewitem.php" method="post" enctype="multipart/form-data">
				<tr>
					<td>Item No.</td>
					<td>
						<input type="number" name="item_no" required>
					</td>
				</tr>
				<tr>
					<td>Name</td>
					<td>
						<input type="text" name="name" required>
					</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>
						<input type="text" name="type" required>
					</td>
				</tr>
				<tr>
					<td>Detail</td>
					<td>
						<textarea cols="22" name="detail" required=""></textarea>
					</td>
				</tr>
				<tr>
					<td>Price</td>
					<td>
						<input type="number" name="price" required>
					</td>
				</tr>
				<tr>
					<td>Image</td>
					<td>
						<input type="file" name="simg" required>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<br><input type="submit" name="submit" value="ADD" class="btn btn-success" style="margin-right:	 75px; width: 150px;">
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
	
	include('../dbcon.php');

	if (isset($_POST['submit'])) 
	{
		$item_no = $_POST['item_no'];
		$name = $_POST['name'];
		$type = $_POST['type'];
		$price = $_POST['price'];
		$detail = $_POST['detail'];
		$imagename = $_FILES['simg'] ['name'];
		$tempname = $_FILES['simg'] ['tmp_name'];

		move_uploaded_file($tempname, "../dataimg/$imagename");

		$query = "INSERT INTO `menu`(`item_no`, `name`, `type`, `detail`, `price`, `image`) VALUES ('$item_no','$name','$type','$detail','$price','$imagename')";
		$run = mysqli_query($conn, $query);

		if ($run == true) 
		{
			?>

			<script type="text/javascript">
				alert("Item Added Successfully!");
			</script>

			<?php
		}
	}

?>