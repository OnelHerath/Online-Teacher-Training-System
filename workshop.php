<?php
include 'stf-connection.php';

if (isset($_POST['submit'])) {
    $wkName = $_POST['wkname'];
    $category = $_POST['category'];
    $Place = $_POST['place'];
    $wkType = $_POST['wktype'];
    $Memb = $_POST['memb'];

    $sql = "INSERT INTO students (wkname, category, place, wktype, memb) 
            VALUES ('$wkName', '$category', '$Place', '$wkType', '$Memb')";

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
        <form class="container" method="post">
            <div class="form-group">
                <label>Workshop Name</label>
                <input type="text" name="wkname" class="form-control" placeholder="Workshop Name" required>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="category" id="" class="form-control">
                    <option value="1">Computing</option>
                    <option value="1">Bussiness</option>
                    <option value="1">Engineer</option>
                </select>
            </div>
            <div class="form-group">
                <label>Place</label>
                <select name="place" id="" class="form-control">
                    <option value="1">Indoor</option>
                    <option value="1">Outdoor</option>
                </select>
            </div>
            <div class="form-group">
                <label>Type</label>
                <select name="wktype" id="" class="form-control">
                    <option value="1">Online</option>
                    <option value="1">Offline</option>
                </select>
            </div>
            <div class="form-group">
                <label>Maximum Member Count</label>
                <input type="number" name="memb" class="form-control"  placeholder="Member" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
