<?php
session_start();

//variable declaration

$description = "";
$serialnumber    = "";
$ipaddress ="";
$type ="";
$dop ="";
$username ="";
$id= 0;
$edit_state =true;
$errors = array(); 
$_SESSION['success'] = "";

//connect to database

$db = mysqli_connect('localhost', 'root', '', 'lwotid');
//update data

if(isset($_POST['update'])){
  $id = mysqli_real_escape_string($db ,$_POST['id']);	
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $serialnumber = mysqli_real_escape_string($db, $_POST['serialnumber']);
  $ipaddress =mysqli_real_escape_string($db,$_POST['ipaddress'] );
  $type = mysqli_real_escape_string($db, $_POST['type']);
  $dop = mysqli_real_escape_string($db, $_POST['dop']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  
  if (empty($description)) { array_push($errors, "Description is required"); }
  if (empty($serialnumber)) { array_push($errors, "Serial Number is required"); }
  if (empty($ipaddress)) { array_push($errors, "Ip Address is required"); }
  if (empty($type)) { array_push($errors, "Type is required"); }
  if (empty($dop)) { array_push($errors, "Date of Purchased is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }

  // update inventory if there are no errors in the form
  if (count($errors) == 0) {
 $query="UPDATE inventory SET description='$description', serialnumber='$serialnumber',ipaddress='$ipaddress',type='$type',dop='$dop',username='$username' WHERE inventory.id=$id";
 mysqli_query($db ,$query);	
 if($_SESSION['success'] = "RECORD UPDATED!!"){
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Please Try Again");
  	}
  }
  }
  

?>