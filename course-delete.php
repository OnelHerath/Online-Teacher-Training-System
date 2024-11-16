<?php 
include 'course-connect.php';

if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];

  $sql="DELETE FROM course where id=$id";
  $result=mysqli_query($connection,$sql);
  if($result){
    header('location:course-display.php');
  }

  else{
    die(mysqli_error($connection));
  }

}

?>