<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"DELETE  FROM student WHERE Id='$id'");
	header('location: Ad-Dl-Student.php');
?>