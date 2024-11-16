<?php
include 'course-connection.php';
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
        <a href="course.php" class="text-light">
            <button class="btn btn-primary" style="margin-top: 20px; margin-bottom: 30px; float: right;">ADD New Course</button>
        </a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Cou No</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM course";
                $result = mysqli_query($connection, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $CouName = $row['couname'];
                        $Cat = $row['cat'];
                        $Time = $row['dutime'];
                        $Type = $row['coutype'];

                        echo '
                            <tr>
                                <th scope="row">' . $id . '</th>
                                <td>' .  $CouName . '</td>
                                <td>' . $Cat . '</td>
                                <td>' . $Time . '</td>
                                <td>' . $Type . '</td>
                                <td>
                                  <button class="btn btn-primary"><a href="course-update.php?updateid=' . $id . '" class="text-light">Update</a></button>
                                  <button class="btn btn-danger"><a href="course-delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
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