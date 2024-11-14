<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
    $password=$_POST['password'];
    $dateb = $_POST['dateb']; 
    $specialty =$_POST['specialty'];
    $section = $_POST['section']; 
    $groupe =  $_POST['groupe'];
 
	mysqli_query($conn,"UPDATE student SET firstname='$firstname',lastname='$lastname',password='$password',dateb='$dateb',specialty='$specialty',section='$section',groupe='$groupe' WHERE Id='$id'");
	header('location: Ad-Dl-Student.php');
?>