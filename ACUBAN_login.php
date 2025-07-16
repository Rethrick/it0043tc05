<?php 
    session_start();
    require "DATABASE_connection.php";


    if(isset($_SESSION['logged_in']) == TRUE){
        header("Location: ACUBAN_main.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="login_design.css">

</head>
<body>
<div class="login-main-container">
    <img src="Golden-State-Warriors-logo.png" class="logo" alt="Team Logo">
    <h2 class="title">Team Login</h2>
    <form action="ACUBAN_loginsub.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" required>
        
        <label>Password</label>
        <input type="password" name="password" required>
        
        <?php if (isset($_GET['Error'])): ?>
            <div class="error"><?= htmlspecialchars($_GET['Error']) ?></div>
        <?php endif; ?>
        
        <button type="submit" class="btn btn-success">SIGN IN</button>
        <a href="ACUBAN_register.php" class="btn btn-warning">SIGN UP</a>
    </form>
</div>


</body>
</html>

