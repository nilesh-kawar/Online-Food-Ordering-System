<!DOCTYPE html>
<html>
<head>
	<title>Menu Database</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div align="center" class="bg-dark text-light pt-4 pb-4">
		<a href="../logout.php"><button style="float: right;" class="btn btn-danger mr-3">LOGOUT</button></a>
		<a href="admindash.php"><button style="float: left;" class="btn btn-success ml-3"><< BACK</button></a>
		<h1>WELCOME TO ADMIN DASHBOARD</h1>	
	</div>

	<table align="center" border="1" width="90%" style="margin-top: 20px;" class="mb-5">
		<tr style="background-color: black; color: white;" align="center">
			<th width="100">Item No.</th>
			<th width="250">Name</th>
			<th>Type</th>
			<th width="200">Detail</th>
			<th>Price</th>
			<th width="250">Image</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>

		<?php

			include('../dbcon.php');

			$query = "SELECT * FROM `menu`";
			$run = mysqli_query($conn, $query);

			if (mysqli_num_rows($run) < 1) 
	        {
	        	echo "<tr><td colspan='5' align='center'>No data found</td><tr>";
	        }
			else
			{
				$count = 0;
				while ($data = mysqli_fetch_assoc($run))
				{
					$count++;
					?>
					<tr align="center">
						<td> <?php echo $data['item_no']; ?> </td>
						<td> <?php echo $data['name']; ?> </td>
						<td> <?php echo $data['type']; ?> </td>
						<td><?php echo $data['detail']; ?></td>
						<td> <?php echo $data['price']; ?> </td>
						<td> <img src="../dataimg/<?php echo $data['image'] ?>" style="max-width:100px;max-height: 100px;"></td>	
						<td> <a href="updateitem1.php?sid=<?php echo $data['id']; ?>"> Edit </a></td>
						<td> <a href="deleteitem1.php?sid=<?php echo $data['id']; ?>"> Delete </a></td>
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