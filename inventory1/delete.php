<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'lwotid');
$id =$_GET['id']; 
$query = "DELETE FROM INVENTORY WHERE id='$id'";
mysqli_query($db , $query);
if($_SESSION['success'] = "RECORD DELETED!!"){
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Please Try Again");
  	}
?>