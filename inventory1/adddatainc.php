
<?php
session_start();

// variable declaration
$description = "";
$serialnumber    = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'lwotid');

// REGISTER USER
if (isset($_POST['reg_add'])) {
  // receive all input values from the form
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $serialnumber = mysqli_real_escape_string($db, $_POST['serialnumber']);
  $ipaddress =mysqli_real_escape_string($db,$_POST['ipaddress'] );
  $type = mysqli_real_escape_string($db, $_POST['type']);
  $dop = mysqli_real_escape_string($db, $_POST['dop']);
  $username = mysqli_real_escape_string($db, $_POST['username']);

  // form validation: ensure that the form is correctly filled
  if (empty($description)) { array_push($errors, "Description is required"); }
  if (empty($serialnumber)) { array_push($errors, "Serial Number is required"); }
  if (empty($ipaddress)) { array_push($errors, "Ip Address is required"); }
  if (empty($type)) { array_push($errors, "Type is required"); }
  if (empty($dop)) { array_push($errors, "Date of Purchased is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }

  // register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO inventory (description,serialnumber, ipaddress, type, dop, username) 
  			  VALUES('$description', '$serialnumber', '$ipaddress', '$type','$dop','$username')";
  	mysqli_query($db, $query);
	if($_SESSION['success'] = "ADDED!!"){
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Please Try Again");
  	}
  }


}

?>