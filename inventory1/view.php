<?php
include_once('viewinc.php');
$query = "SELECT * FROM inventory";
$results = mysqli_query($db, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Inventory LWOT(IT)</title>
  <link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
<div class="header">
	<h2>View</h2>
</div><br>
<table>
      <tr>
		  <th>Id</th>
          <th>Description</th>
          <th>Serial Number</th>
          <th>Ip Address</th>
          <th>Type</th>
          <th>Date of Purchased</th>
          <th>Username</th>
		  <th colspan="2">Operation</th>
		  </tr>
		<?php
		while($rows=mysqli_fetch_assoc($results))
		{
	?>		
	        <tr>
			<td><?php echo $rows['id'];?></td>
			<td><?php echo $rows['description'];?></td>
			<td><?php echo $rows['serialnumber'];?></td>
			<td><?php echo $rows['ipaddress'];?></td>
			<td><?php echo $rows['type'];?></td>
			<td><?php echo $rows['dop'];?></td>
			<td><?php echo $rows['username'];?></td>
			<td><a href='update.php?id=<?php echo $rows['id']; ?>& description=<?php echo $rows['description'];?>& serialnumber=<?php echo $rows['serialnumber'];?>& ipaddress=<?php echo $rows['ipaddress'];?>& type=<?php echo $rows['type'];?>& dop=<?php echo $rows['dop'];?>& username=<?php echo $rows['username'];?>'>Update</a></td>
			<td><a href='delete.php?id=<?php echo $rows['id']; ?>& description=<?php echo $rows['description'];?>& serialnumber=<?php echo $rows['serialnumber'];?>& ipaddress=<?php echo $rows['ipaddress'];?>& type=<?php echo $rows['type'];?>& dop=<?php echo $rows['dop'];?>& username=<?php echo $rows['username'];?>'>Delete</a></td>
			</tr>
		<?php	
		}
		?> 
    </table>
	</div>
	<div class="footer">
	<a href="index.php">Return to Homepage</a>
	</div>
	</html>