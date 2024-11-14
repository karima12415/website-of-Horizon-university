<?php
   include 'connect.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search page</title>
    <link rel="stylesheet" href="/style/styleserch.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
       <div class="container">
          <div class="go-home">
            <a class="go" href="/pages/teacher.php"><i class="fa-solid fa-house" style="color: #803c4a;"></i></a>
            <h3>go back</h3>
          </div>
        <div >
        <h2>search<i class="fa-solid fa-magnifying-glass-plus" style="color: #a15959;"></i></h2>
		    <form method="POST" action="" class="form">
			    <label>Firstname</label><input type="text" name="firstname">
          <label>Lastname</label><input type="text" name="lastname">
          <label>password</label><input type="password" name="password">
			    <input class="btn" type="submit" name="submit">
		    </form>
        </div>
	      </div> 
        </div>   
</body>
</html>