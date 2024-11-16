<?php
include 'course-connection.php';
$id = $_GET['updateid'];

$query = "SELECT * FROM course WHERE id = $id";
$result = mysqli_query($connection, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $CouName = $row['couname'];
    $Cat = $row['cat'];
    $Time = $row['dutime'];
    $Type = $row['coutype'];
} else {
    die(mysqli_error($connection));
}

if (isset($_POST['submit'])) {
    $CouName = $_POST['couname'];
    $Cat = $_POST['cat'];
    $Time = $_POST['dutime'];
    $Type = $_POST['coutype'];

    $sql = "UPDATE course SET couname = '$CouName', cat = '$Cat', dutime = '$Time', coutype = '$Type' WHERE id = $id";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        header('location: course-display.php');
    } else {
        die(mysqli_error($connection));
    }
}
?>

<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
</head>
<body>
    <div>
        <form class="container" method="post" action="course-update.php">
        </form>
    </div>
</body>
</html>
