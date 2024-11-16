<?php
include 'stf-connection.php';
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
            <button class="btn btn-primary" style="margin-top: 20px; margin-bottom: 30px; float: right;">ADD Staff Member</button>
        </a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">STF No</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">NIC</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM staff";
                $result = mysqli_query($connection, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $firstName = $row['firstname'];
                        $lastName = $row['lastname'];
                        $email = $row['email'];
                        $nic = $row['nic'];
                        $phoneNumber = $row['phonenumber'];
                        $gender = $row['gender'];
                        $password = $row['password'];

                        echo '
                            <tr>
                                <th scope="row">' . $id . '</th>
                                <td>' . $firstName . '</td>
                                <td>' . $lastName . '</td>
                                <td>' . $email . '</td>
                                <td>' . $nic . '</td>
                                <td>' . $phoneNumber . '</td>
                                <td>' . $gender . '</td>
                                <td>' . $password . '</td>
                                <td>
                                  <button class="btn btn-primary"><a href="stf-update.php?updateid=' . $id . '" class="text-light">Update</a></button>
                                  <button class="btn btn-danger"><a href="stf-delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
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