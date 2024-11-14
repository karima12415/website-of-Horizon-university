<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades Entry</title>
    <link rel="stylesheet" href="/style/styleaddelet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
	<div class="go-home">
        <a class="go" href="/pages/teacher.php"><i class="fa-solid fa-house" style="color: #803c4a;"></i></a>
        <h3>go back</h3>
    </div>
	<div>
		<form method="POST" action="add-valeu.php" class="form">
			<label>Firstname</label><input type="text" name="firstname">
			<label>Lastname</label><input type="text" name="lastname">
            <label>password</label><input type="password" name="password" maxlength="8" minlength="8">
			<label>Not td</label><input type="text" name="td">
			<label>Not tp</label><input type="text" name="tp">
			<input class="btn" type="submit" name="add-valeu">
		</form>
	</div>
		
	</div>
</body>
</html>