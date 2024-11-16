<?php
include 'std-connection.php';

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $category = $_POST['category'];
    $phoneNumber = $_POST['phonenumber'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];

    $sql = "INSERT INTO students (firstname, lastname, email, nic, category, phonenumber, gender, dob, password) 
            VALUES ('$firstName', '$lastName', '$email', '$nic', '$category', '$phoneNumber', '$gender', '$dob', '$password')";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        header('location: std-display.php');
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
                <label>First Name</label>
                <input type="text" name="firstname" class="form-control" id="exampleInputName" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control" id="exampleInputEmail" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputMobile" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label>NIC</label>
                <input type="text" name="nic" class="form-control" id="exampleInputMobile" placeholder="NIC" required>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select id="colors" name="category" required style="border-radius: 5px; border: none; font-size: 16;">
                    <option value="computing">Computing</option>
                    <option value="engineering">Engineering</option>
                    <option value="business">Business</option>
                </select>
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phonenumber" class="form-control" id="exampleInputMobile" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <label for="male" style="margin-left: 5px;">Male</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="female" style="margin-left: 20px;">Female</label>
                <input type="radio" id="female" name="gender" value="female">
            </div>
            <div class="form-group">
                <label>Date Of Birth</label>
                <input type="date" name="dob" class="form-control" id="exampleInputMobile" placeholder="Date of Birth" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
