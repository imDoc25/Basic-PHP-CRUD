<?php
    require('./read.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Work Application</title>
</head>
<body>
    <div class="main">
        <h2 id="main-title">Company Information</h2>
        <form class="main-form" action="/WorkApplicationCRUD/create.php" method="post">
            <label for="CName">Company Name:</label>
            <input type="text" name="CName" id="CName">
            </br>
            <label for="Clocation">Location:</label>
            <input type="text" name="Clocation" id="Clocation">
            </br>
            <label for="Csetup">Work Set Up:</label>
            <input type="text" name="Csetup" id="Csetup">
            </br>
            <label for="Cstatus">Application Status:</label>
            <select name="Cstatus" id="Cstatus">
                <option Disabled>Choose..</option>
                <option value="Accepted">Accepted</option>
                <option value="Pending">Pending</option>
                <option value="Rejected">Rejected</option>
            </select>
            </br>
            <input type="submit" name="create" id="submit" value="SUBMIT">
            
        </form>

        <table class="main-table">
            <tr>
                <th>Company ID</th>
                <th>Company Name</th>
                <th>Location</th>
                <th>Work Setup</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>

            <?php while($results = mysqli_fetch_array($sqlRead)) {?>
            <tr>
                <td><?php echo $results['CompanyID'] ?></td>
                <td><?php echo $results['CompanyName'] ?></td>
                <td><?php echo $results['Location'] ?></td>
                <td><?php echo $results['WorkSetUp'] ?></td>
                <td><?php echo $results['Status'] ?></td>
                <td id="action"> 
                    <form action="/WorkApplicationCRUD/update.php" method="post">
                        <input type="submit" name="edit" id="edit" value="UPD">
                        <input type="hidden" name="editCompanyID" value="<?php echo $results['CompanyID']?>">
                        <input type="hidden" name="editCompanyName" value="<?php echo $results['CompanyName']?>">
                        <input type="hidden" name="editLocation" value="<?php echo $results['Location']?>">
                        <input type="hidden" name="editSetup" value="<?php echo $results['WorkSetUp']?>">
                        <input type="hidden" name="editStatus" value="<?php echo $results['Status']?>"> 
                    </form>
                
                    <form action="/WorkApplicationCRUD/delete.php" method="post">
                        <input type="submit" name="delete" id="delete" value="DEL">
                        <input type="hidden" name="deleteID" value="<?php echo $results['CompanyID']?>"> 
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>