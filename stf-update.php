<?php
include 'stf-connection.php';
$id = $_GET['updateid'];

$query = "SELECT * FROM staff WHERE id = $id";
$result = mysqli_query($connection, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $firstName = $row['firstname'];
    $lastName = $row['lastname'];
    $email = $row['email'];
    $nic = $row['nic'];
    $phoneNumber = $row['phonenumber'];
    $gender = $row['gender'];
    $password = $row['password'];
} else {
    die(mysqli_error($connection));
}

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $phoneNumber = $_POST['phonenumber'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $sql = "UPDATE staff SET firstname = '$firstName', lastname = '$lastName', email = '$email', nic = '$nic', phonenumber = '$phoneNumber', gender = '$gender', password = '$password' WHERE id = $id";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        header('location: stf-display.php');
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
        <form class="container" method="post" action="stf-update.php">
        </form>
    </div>
</body>
</html>
