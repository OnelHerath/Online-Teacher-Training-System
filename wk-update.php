<?php
include 'wk-connection.php';
$id = $_GET['updateid'];

$query = "SELECT * FROM workshop WHERE id = $id";
$result = mysqli_query($connection, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $wkName = $row['wkname'];
    $category = $row['category'];
    $Place = $row['place'];
    $Type = $row['wktype'];
    $Memb = $row['memb'];

} else {
    die(mysqli_error($connection));
}

if (isset($_POST['submit'])) {
    $wkName = $_POST['wkname'];
    $category = $_POST['category'];
    $Place = $_POST['place'];
    $Type = $_POST['wktype'];
    $Memb = $_POST['memb'];

    $sql = "UPDATE workshop SET wkname = '$wkName', category = '$category', place = '$Place', wktype = '$Type', memb = '$Memb' WHERE id = $id";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        header('location: wk-display.php');
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
        <form class="container" method="post" action="wk-update.php">
        </form>
    </div>
</body>
</html>
