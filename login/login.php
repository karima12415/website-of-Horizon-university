<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="/login/stylelogin.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Login  </header>
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
                    <input type="password" name="password" id="password"  maxlength="8" minlength="8" required>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="link">
                    Don't have an account? <a href="/login/register.php">Sign Up Now.</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>