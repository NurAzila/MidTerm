<?php include('mysql.php')?>

<!DOCTYPE html>

<html lang="en">
    
    <head>
        <title>Register</title>
        <link rel="icon" href="image/register.png" type="image/gif"> <link rel="stylesheet" href="Style.css"/>
    </head>

<body>
    <form method="post" class="form" action="register.php">
        <?php include('errors.php'); ?>
        <h1 class="login-title">Registration</h1>
        <div class="input-group">
            <label> Username </label>
            <input type="text" name="username" class = "login-input" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label> Email </label>
            <input type="email" name="email" class = "login-input" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label> Password </label>
            <input type="password" name="pass1" class = "login-input">
        </div>
        <div class="input-group">
            <label> Confirm Password </label>
            <input type="password" name="pass2" class = "login-input">
        </div>
        <div class="input-group" align="center">
            <input type="submit" class = "login-button" value="Register" name="reg_user">
        </div>
        <p>
            Already a member? <a href="login.php">Click to Login</a></p>
    </form>

</body>
</html>