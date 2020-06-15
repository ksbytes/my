<?php include('updateinc.php');
 if(isset($_GET['id'])){
	 $id =$_GET['id'];
	 $edit_state = true;
	 $rec =mysqli_query($db, "SELECT * FROM inventory WHERE id=$id");
	 $record =mysqli_fetch_array($rec);
	 $id =$record['id'];
	 $description =$record['description'];
	 $serialnumber =$record['serialnumber'];
	 $ipaddress =$record['ipaddress'];
	 $type =$record['type'];
	 $dop =$record['dop'];
	 $username =$record['username']; 
 }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Inventory LWOT(IT)</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Update</h2>
  </div>
  <form method="post" action="update.php">
   <?php include('errors.php'); ?>
    <div class="input-group">
	<input type="hidden" name="id" value="<?php echo $id;?>">
  <div class="input-group">
  	  <label>Description</label>
  	  <input type="text" name="description" value ="<?php echo $description;?>">
  	</div>
	<div class="input-group">
	 <label>Serial Number</label>
	 <input type="text" name="serialnumber"value ="<?php echo $serialnumber;?>">
	</div>
	<div class="input-group">
	 <label>Ip Address</label>
	 <input type="text" name="ipaddress"value ="<?php echo $ipaddress;?>">
	</div>
  	<div class="input-group">
  	  <label>Type</label>
  	  <input type="text" name="type"value ="<?php echo $type;?>">
  	</div>
	<div class="input-group">
  	  <label>Date of Purchased</label>
  	  <input type="text" name="dop"value ="<?php echo $dop;?>">
  	</div>
	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username"value ="<?php echo $username;?>">
  	</div>
	<div class="input-group">
	<button type="submit" class="btn" name="update">Update</button>
  	</div>
  	<p>
  	 <a href="view.php">Return to view</a>
  	</p>
  </form>
</body>
</html>
