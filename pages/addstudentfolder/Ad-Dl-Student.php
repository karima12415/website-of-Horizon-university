<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Delete student</title>
    <link rel="stylesheet" href="/style/styleaddelet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
	<div class="go-home">
        <a class="go" href="/pages/teacher.php"><i class="fa-solid fa-house" style="color: #803c4a;"></i></a>
        <h3>go back</h3>
    </div>
	<div>
		<form method="POST" action="add.php" class="form">
			<label>Firstname</label><input type="text" name="firstname">
			<label>Lastname</label><input type="text" name="lastname">
            <label>password</label><input type="password" name="password" maxlength="8" minlength="8">
            <label>date of birth</label><input type="date" name="dateb">
            <label>specialty</label><input type="text" name="specialty">
            <label>section</label><input type="text" name="section">
            <label>groupe</label><input type="number" name="groupe">
			<input class="btn" type="submit" name="add">
		</form>
	</div>
	<br>
	<div class="table">
		<table border="1">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>password</th>
                <th>date of brith</th>
                <th>specialty</th>
                <th>section</th>
                <th>groupe</th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"SELECT * FROM student");
					while($row=mysqli_fetch_array($query)){
                        ?>
						<tr>
							<td><?php echo $row['firstname']; ?></td>
							<td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['dateb']; ?></td>
                            <td><?php echo $row['specialty']; ?></td>
                            <td><?php echo $row['section']; ?></td>
                            <td><?php echo $row['groupe']; ?></td>
							<td>
								<a class="a1" href="edit.php?id=<?php echo $row['Id']; ?>">Edit</a>
								<a class="a2" href="delete.php?id=<?php echo $row['Id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>