<?php 
include 'wk-connection.php';

if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];

  $sql="DELETE FROM workshop where id=$id";
  $result=mysqli_query($connection,$sql);
  if($result){
    header('location:wk-display.php');
  }

  else{
    die(mysqli_error($connection));
  }

}

?>