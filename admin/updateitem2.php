<?php
	
	include('../dbcon.php');

	$item_no = $_POST['item_no'];
	$name = $_POST['name'];
	$type = $_POST['type'];
	$detail = $_POST['detail'];
	$price = $_POST['price'];
	$sid = $_POST['sid'];
 	$imagename = $_FILES['simg'] ['name'];
	$tempname = $_FILES['simg'] ['tmp_name'];

	move_uploaded_file($tempname, "../dataimg/$imagename");

	$query = "UPDATE `menu` SET `item_no`='$item_no',`name`='$name',`type`='$type',`detail`='$detail',`price`='$price',`image`='$imagename' WHERE `id` = '$sid'";

	$run = mysqli_query($conn, $query);

	if($run == true)
	{
		?>
		<script type="text/javascript">
			alert("Data updated Successfully!");
			window.open('updateitem1.php?sid=<?php echo $sid ?>','_self');
		</script>
		<?php
	}

?>