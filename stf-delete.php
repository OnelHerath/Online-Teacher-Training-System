<?php 
include 'stf-connect.php';

if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];

  $sql="DELETE FROM staff where id=$id";
  $result=mysqli_query($connection,$sql);
  if($result){
    header('location:stf-display.php');
  }

  else{
    die(mysqli_error($connection));
  }

}

?>