<?php 
include 'std-connect.php';

if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];

  $sql="DELETE FROM students where id=$id";
  $result=mysqli_query($connection,$sql);
  if($result){
    header('location:std-display.php');
  }

  else{
    die(mysqli_error($connection));
  }

}

?>