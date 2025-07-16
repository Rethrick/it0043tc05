<?php
session_start();
require "DATABASE_connection.php";

$username = $_POST['uname'];
$password = $_POST['pword'];



$query = $databaseName->query("SELECT * from accounts_tables WHERE username ='$username' AND password = '$password' ") or die($databaseName->error);

$isFetched = $query->num_rows;

if($isFetched > 0){

    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    header("Location: ACUBAN_main.php");
}else{
    echo "<script>
            alert('Incorrect username or password');
            location.href='ACUBAN_login.php';
    </script>";
}

?>