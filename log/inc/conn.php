<?php

    //definig host
    $host = "localhost";
    //define username
    $username = "root";
    //define password
    $password = "";
    //define database
    $database = "spacecrew";

    $conn = mysqli_connect($host, $username, $password, $database);

    if(!$conn){
        die("Database connection failed " . mysqli_error($conn));
    }
    else{
        // echo "Database connection success!!";
    }

?>

