<?php

    require "DATABASE_connection.php";

    $fullname   = $_POST['iname'];
    $jerseyNum   = $_POST['ijerseyNum'];
    $position  = $_POST['iposition'];
    $height = $_POST['iheight'];
    $currStatus = $_POST['istatus'];
    $weight = $_POST["iweight"];
    $age = $_POST['iage'];

    $temp_loc = $_FILES['userfile']['tmp_name'];
    $permfolder = "uploads/";
    $filename = $_FILES['userfile']['name'];
    $permanentLoc = $permfolder.$filename;

    move_uploaded_file($temp_loc,$permanentLoc);


    echo "<pre>";

    print_r($_FILES);



    $query = $databaseName->query("INSERT into players_table(full_name,jersey_number,position,height_cm,current_status,weight_kg,age,photo) 
    VALUES ('$fullname','$jerseyNum','$position','$height', '$currStatus','$weight', '$age','$permanentLoc')");
    header("Location: ACUBAN_main.php");

?>