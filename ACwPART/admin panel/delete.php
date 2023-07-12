<?php
	include('conn.php');
	$desc=$_GET['task_description'];
	mysqli_query($conn,"delete from `tasks` where task_description='$desc'");
	header('location:indexcards.php');
?>