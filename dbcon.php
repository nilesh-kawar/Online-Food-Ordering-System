<?php
	
	$conn = mysqli_connect('localhost','root','','jhatpat-foods');

	if ($conn == false) 
	{
		echo "Database connection failed";
	}
?>