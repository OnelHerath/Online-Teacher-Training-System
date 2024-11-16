<?php 
include 'book-connection.php';

if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];

  $sql="DELETE FROM book where id=$id";
  $result=mysqli_query($connection,$sql);
  if($result){
    header('location:book-display.php');
  }

  else{
    die(mysqli_error($connection));
  }

}

?>