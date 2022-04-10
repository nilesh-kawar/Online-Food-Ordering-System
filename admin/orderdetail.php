<?php
	include('../dbcon.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">


	<style type="text/css">
		.abc button{
			width: 350px;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div align="center" class="bg-dark text-light pt-4 pb-4">
		<a href="../logout.php"><button style="float: right;" class="btn btn-danger mr-3">LOGOUT</button></a>
		<a href="admindash.php"><button style="float: left;" class="btn btn-success ml-3"><< BACK</button></a>
		<h1>ORDER DETAIL</h1>	
	</div>

	<table align="center" border="1" width="90%" style="margin-top: 20px;" class="mb-5">
		<tr style="background-color: black; color: white;" align="center">
			<th width="100">Order Id</th>
			<th width="150">Item Name</th>
			<th width="150">Price</th>
			<th width="150">Qty</th>
			<th width="180">Total</th>
			<th width="150">Name</th>
			<th width="400">location</th>
			<th width="150">Email</th>
		</tr>

		<?php

			include('../dbcon.php');

			$query = "SELECT * FROM `order` ";
			$run = mysqli_query($conn, $query);

			if (mysqli_num_rows($run) < 1) 
	        {
	        	echo "<tr><td colspan='5' align='center'>No data found</td><tr>";
	        }
			else
			{
				while ($data = mysqli_fetch_assoc($run))
				{
					?>
					<tr align="center">
						<td> <?php echo $data['orderId']; ?> </td>
						<td> <?php echo $data['itemName']; ?> </td>
						<td> <?php echo $data['price']; ?> </td>
						<td> <?php echo "x".$data['qty']; ?> </td>
						<td> <?php echo $data['total']; ?> </td>
						<td> <?php echo $data['name']; ?> </td>
						<td> <?php echo $data['location']; ?> </td>
						<td> <?php echo $data['email']; ?> </td>
					</tr>
					<?php
				}
			}
    	?>
    </table>

	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>
</body>
</html>