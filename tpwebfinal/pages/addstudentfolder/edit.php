<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"SELECT * FROM student WHERE Id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>	Edit  Student Information</title>
    <link rel="stylesheet" href="/style/styleaddelet.css">
</head>
<body>
	<h2>Edit</h2>
	<form class="form" method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Firstname</label><input type="text" value="<?php echo $row['firstname']; ?>" name="firstname">
		<label>Lastname</label><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname">
        <label>password</label><input type="password" maxlength="8" minlength="8" value="<?php echo $row['password']; ?>" name="password">
        <label>date of brith</label><input type="date" value="<?php echo $row['dateb']; ?>" name="dateb">
        <label>specialty</label><input type="text" value="<?php echo $row['specialty']; ?>" name="specialty">
        <label>section</label><input type="text" value="<?php echo $row['section']; ?>" name="section">
        <label>groupe</label><input type="number" value="<?php echo $row['groupe']; ?>" name="groupe">
		<input type="submit"class="btn" name="submit">
		<a href="/pages/addstudentfolder/Ad-Dl-Student.php">Back</a>
	</form>
</body>
</html>