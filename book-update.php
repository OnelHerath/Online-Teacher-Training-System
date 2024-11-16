<?php
include 'book-connection.php';
$id = $_GET['updateid'];

$query = "SELECT * FROM book WHERE id = $id";
$result = mysqli_query($connection, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $BookName = $row['bookname'];
    $Date = $row['pubdate'];
    $Author = $row['author'];
} 

else {
    die(mysqli_error($connection));
}

if (isset($_POST['submit'])) {
    $BookName = $_POST['bookname'];
    $Date = $_POST['pubdate'];
    $Author = $_POST['author'];

    $sql = "UPDATE book SET bookname = '$BookName', pubdate = '$Date', author = '$Author' WHERE id = $id";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        header('location: book-display.php');
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
        <form class="container" method="post" action="book-update.php">
        </form>
    </div>
</body>
</html>
