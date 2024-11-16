<?php
include 'wk-connection.php';
?>

<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <a href="staff.php" class="text-light">
            <button class="btn btn-primary" style="margin-top: 20px; margin-bottom: 30px; float: right;">ADD Workshop</button>
        </a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">WK No</th>
                    <th scope="col">Workshop Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Place</th>
                    <th scope="col">Type</th>
                    <th scope="col">Max. Member</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM workshop";
                $result = mysqli_query($connection, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $wkName = $row['firstname'];
                        $category = $row['category'];
                        $Place = $row['place'];
                        $Type= $row['wktype'];
                        $Memb = $row['memb'];

                        echo '
                            <tr>
                                <th scope="row">' . $id . '</th>
                                <td>' . $wkName . '</td>
                                <td>' . $category . '</td>
                                <td>' . $Place . '</td>
                                <td>' . $Type . '</td>
                                <td>' . $Memb . '</td>
                                <td>
                                  <button class="btn btn-primary"><a href="wk-update.php?updateid=' . $id . '" class="text-light">Update</a></button>
                                  <button class="btn btn-danger"><a href="wk-delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
                               </td>
                           </tr>';
                    }
                }
                ?>

         </tbody>
        </table>
       </div>
    </body>
</html>