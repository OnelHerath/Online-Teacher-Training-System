<?php
include 'book-connection.php';

if (isset($_POST['submit'])) {
    $BookName = $_POST['bookname'];
    $Date = $_POST['pubdate'];
    $Author = $_POST['author'];

    $sql = "INSERT INTO book (bookname, pubdate, author) 
            VALUES ('$BooktName', '$Date', '$Author')";

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
        <form class="container" method="post">
            <div class="form-group">
                <label>Book Name</label>
                <input type="text" name="bookname" class="form-control" id="exampleInputName" placeholder="Book name" required>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" name="pubdate" class="form-control" id="exampleInputEmail" placeholder="Date" required>
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class="form-control" id="exampleInputMobile" placeholder="Author" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
