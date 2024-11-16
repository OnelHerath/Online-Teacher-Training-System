<?php
include 'course-connection.php';

if (isset($_POST['submit'])) {
    $CouName = $_POST['couname'];
    $Cat = $_POST['cat'];
    $Time = $_POST['dutime'];
    $Type = $_POST['coutype'];

    $sql = "INSERT INTO students (couname, cat, dutime, coutype) 
            VALUES ('$CoutName', '$Cat', '$Time', ' $Type')";

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
        <form class="container" method="post">
            <div class="form-group">
                <label>Course Name</label>
                <input type="text" name="couname" class="form-control" placeholder="Course Name" required>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="cat" id="" class="form-control">
                    <option value="1">Computing</option>
                    <option value="1">Bussiness</option>
                    <option value="1">Engineering</option>
                </select>
            </div>
            <div class="form-group">
                <label>Course Duration (Hours)</label>
                <input type="number" name="dutime" class="form-control" placeholder="Course duration" required>
            </div>
            <div class="form-group">
                <label>Course Type</label>
                <select name="coutype" id="" class="form-control">
                    <option value="1">Online</option>
                    <option value="1">Offline</option>
                </select>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
