<?php include('adddatainc.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>Inventory LWOT(IT)</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Add</h2>
  </div>
	
  <form method="post" action="adddata.php">
    <?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Description</label>
  	  <input type="text" name="description">
  	</div>
	<div class="input-group">
	 <label>Serial Number</label>
	 <input type="text" name="serialnumber">
	</div>
	<div class="input-group">
	 <label>Ip Address</label>
	 <input type="text" name="ipaddress">
	</div>
  	<div class="input-group">
  	  <label>Type</label>
  	  <input type="text" name="type">
  	</div>
	<div class="input-group">
  	  <label>Date of Purchased</label>
  	  <input type="text" name="dop">
  	</div>
	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_add">Add</button>
  	</div>
  	<p>
  	 <a href="index.php">Return to Homepage</a>
  	</p>
  </form>
</body>
</html>