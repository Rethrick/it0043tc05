<?php

    require "DATABASE_connection.php";

    $username           = $_POST['uname'];
    $password           = $_POST['pword'];

    $query = $databaseName->query("
    INSERT into accounts_tables (username,password)
    VALUES ('$username','$password')
        ");
        header("Location: ACUBAN_login.php");


?>