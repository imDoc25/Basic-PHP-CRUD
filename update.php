<?php
    require('./database.php');

    if(isset($_POST['edit'])){
        $editCompanyID = $_POST['editCompanyID'];
        $editCompanyName = $_POST['editCompanyName'];
        $editLocation = $_POST['editLocation'];
        $editSetup = $_POST['editSetup'];
        $editStatus = $_POST['editStatus'];
    }

    if(isset($_POST['update'])){
        $updtCompanyID = $_POST['updtCompanyID'];
        $updtCompanyName = $_POST['updtCompanyName'];
        $updtLocation = $_POST['updtLocation'];
        $updtSetup = $_POST['updtSetup'];
        $updtStatus = $_POST['updtStatus'];

        $queryUpdate = "UPDATE Company SET CompanyName = '$updtCompanyName', Location = '$updtLocation', WorkSetUp = '$updtSetup', Status = '$updtStatus' WHERE CompanyID = $updtCompanyID";
        $sqlUpdate = mysqli_query($connection, $queryUpdate);

        echo "<script> alert('Company Information Successfully Updated!') </script>";
        echo "<script> window.location.href = '/WorkApplicationCRUD/index.php' </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Company Information</title>
</head>
<body>
    <div class="main-update-form">
        <form action="/WorkApplicationCRUD/update.php" method="post">
            <h2>Update Company Information</h2>
            <input type="text" name="updtCompanyName" id="updtCompanyName" value="<?php echo $editCompanyName?>">
            <input type="text" name="updtLocation" id="updtLocation" value="<?php echo $editLocation?>">
            <input type="text" name="updtSetup" id="updtSetup" value="<?php echo $editSetup?>">
            <!-- <input type="text" name="updtStatus" id="updtStatus" value="<?php echo $editStatus?>"> -->
            <select name="updtStatus" id="updtStatus">
                <option Disabled>Choose..</option>
                <option value="Accepted">Accepted</option>
                <option value="Pending">Pending</option>
                <option value="Rejected">Rejected</option>
            </select>
            <input type="submit" name="update" value="UPDATE">
            <input type="hidden" name="updtCompanyID" value = "<?php echo $editCompanyID ?>">
        </form>
    </div>
</body>
</html>