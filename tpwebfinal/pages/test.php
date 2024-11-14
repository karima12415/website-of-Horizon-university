<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/login/stylelogin.css">
</head>
<body>
<?php
      
     
      $password=$_POST['password'];
      if ($password=='L2G7') {
      header("Location: teacher.php");
      }
      else{
          echo"<div class='message'>
                      <p>This password is invalid!</p>
                      </div><br>";
                 echo"<a href='javascript:self.history.back()'><buttom class='btn'>Go Back</button>";
      }
          
            
  ?>
</body>
</html>
