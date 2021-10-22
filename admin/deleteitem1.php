<?php
	
	include('../dbcon.php');

	$sid = $_GET['sid'];
	$query = "DELETE FROM `menu` WHERE `id` = '$sid'";

	$run = mysqli_query($conn, $query);

	if($run == true)
	{
		?>

		<script type="text/javascript">
			alert("Item Deleted Successfully!");
			window.open('admindash.php?sid=<?php echo $sid ?>','_self');
		</script>

		<?php
	}

?>