<?php
	include('conn.php');
	$desc                  =$_GET['task_description'];
	$workshop_name         =$_POST['workshop_name'];
	$task_description      =$_POST['task_description'];
	$deadline              =$_POST['deadline'];
	
	mysqli_query($conn,"update tasks set workshop_name='$workshop_name', task_description='$task_description' , deadline='$deadline' where task_description='$desc'");
	header('location:indexcards.php');
?>