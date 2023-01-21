<?php
    require('./database.php');

    if(isset($_POST['create'])){
        $CName = $_POST['CName'];
        $Clocation = $_POST['Clocation'];
        $Csetup = $_POST['Csetup'];
        $Cstatus = $_POST['Cstatus'];
    
        $queryCreate = "INSERT INTO Company VALUES (null, '$CName', '$Clocation', '$Csetup', '$Cstatus')";
        $sqlCreate = mysqli_query($connection, $queryCreate);

        echo "<script> alert('New Company Successfully Created!') </script>";
        echo "<script> window.location.href = '/WorkApplicationCRUD/index.php' </script>";
    } else {
        echo "<script> alert('Unable to Create!') </script>";
    }
?>