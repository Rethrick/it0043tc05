<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Form</title>
<link rel="stylesheet" href="login_design.css">
</head>
<body>
    
<div class="register-main-container">
    <img src="Golden-State-Warriors-logo.png" class="logo" alt="Team Logo">
    <h2 class="title">Register New Account</h2>
    <form action="ACUBAN_registersub.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" required>
        
        <label>Password</label>
        <input type="password" name="password" required>


        <button type="submit" class="btn btn-warning">SIGN UP</button>
        <a href="ACUBAN_login.php" class="btn btn-default">BACK TO LOGIN</a>
    </form>
</div>


</body>
</html>