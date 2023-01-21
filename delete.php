<?php   
    require('./database.php');

    if(isset($_POST['delete'])){
        $deleteID = $_POST['deleteID'];

        $queryDelete = "DELETE FROM Company WHERE CompanyID = $deleteID";
        $sqlDelete = mysqli_query($connection, $queryDelete);

        echo "<script> alert('Company Deleted Succesfully!') </script>";
        echo "<script> window.location.href = '/WorkApplicationCRUD/index.php' </script>";
    } else {
        echo "<script> alert('Failed to Delete!') </script>";
    }
?>