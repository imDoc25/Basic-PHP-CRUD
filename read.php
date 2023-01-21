<?php   
    require('./database.php');

    $queryRead = "SELECT * FROM Company";
    $sqlRead = mysqli_query($connection, $queryRead);
?>