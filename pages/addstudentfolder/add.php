<?php 
include('conn.php');
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']); 
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']); 
$password = mysqli_real_escape_string($conn, $_POST['password']); 
$dateb = mysqli_real_escape_string($conn, $_POST['dateb']); 
$specialty = mysqli_real_escape_string($conn, $_POST['specialty']);
$section = mysqli_real_escape_string($conn, $_POST['section']); 
$groupe = mysqli_real_escape_string($conn, $_POST['groupe']);
$query = "INSERT INTO student (firstname, lastname, password, dateb, specialty, section, groupe) VALUES ('$firstname', '$lastname', '$password', '$dateb', '$specialty', '$section', '$groupe')";
mysqli_query($conn, $query) or die("Error: ". mysqli_error($conn));
header('location: Ad-Dl-Student.php'); 
?>