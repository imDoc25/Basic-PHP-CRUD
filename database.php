<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "myworkapplication";

    $connection = mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_error()){
        echo "Message: Unable to connect";
        echo "Error: " .mysqli_connect_error();
    } //else 
        // echo "Connection Success!";
?>