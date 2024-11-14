<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register page</title>
    <link rel="stylesheet" href="/login/stylelogin.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
        <?php
        include("config.php");
        if(isset($_POST['submit']))
        {
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $password=$_POST['password'];
            //verifying the unique password
            $verif_query=mysqli_query($com,"SELECT password FROM users WHERE password='$password'");
            if (mysqli_num_rows($verif_query) !=0) 
            {
               echo"<div class='message'>
                    <p>This password is used ,Try another one Please!</p>
                    </div><br>";
               echo"<a href='javascript:self.history.back()'><buttom class='btn'>Go Back</button>";
            }
            else
            {
                mysqli_query($com,"INSERT INTO users(firstname,lastname,password) VALUES('$firstname','$lastname' ,'$password')")or die ("Error Occure");
                echo"<div class='message'>
                    <p>Registration successfully!</p>
                    </div><br>";
                echo"<a href='index.php'><buttom class='btn'>Login Now</button>";
            }
        }else{
        ?>
            <header>Sign Up </header>
            <form action="" method="post">
                <div class="field-input">
                    <label for="firstname">FirstName</label><br>
                    <input type="text" name="firstname" id="firstname" autocomplete="off" required>
                </div>
                <div class="field-input">
                    <label for="lastname">LastName</label><br>
                    <input type="text" name="lastname" id="lastname" autocomplete="off" required>
                </div>
                <div class="field-input">
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" autocomplete="off"  maxlength="8" minlength="8" required>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="link">
                    Already a member? <a href="/login/index.php">Sign In.</a>
                </div>
            </form>
        </div>
    </div>
    <?php  }?>
</body>
</html>
