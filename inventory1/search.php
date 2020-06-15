<?php
$search_result ="";
if(isset($_POST['search']))
{
	$description=$_POST['description'];
	$query="SELECT * FROM `inventory` WHERE CONCAT(`id`, `description`, `serialnumber`, `ipaddress`, `type`, `dop`, `username`)LIKE '%".$description."%'";
	$search_result = filterTable($query);
}
else{
	$query ="SELECT * FROM `inventory`";
	$search_result = filterTable($query);
}


function filterTable($query)
{
	$db = mysqli_connect('localhost', 'root', '', 'lwotid');
	$filter_Result = mysqli_query($db, $query);
	return $filter_Result;
}

?>



<!DOCTYPE html>
<html>
<head>
  <title>Search Inventory LWOT(IT)</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Search</h2>
  </div>
  <form method="post" action="search.php">
  <div class="input-group">
  	  <label>Description</label>
  	  <input type="text" name="description">
  	</div>
	<div class="input-group">
	<button type="submit" class="btn" name="search">Search</button>
  	</div>
  	<p>
  	 <a href="index.php">Return to Homepage</a>
  	</p>
  </form>
  <table > <link rel="stylesheet" type="text/css" href="styleview.css">
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
		<?php while($row= mysqli_fetch_array($search_result)):?>
           <tr>
		   <td><?php echo $row['id'];?></td>
			<td><?php echo $row['description'];?></td>
			<td><?php echo $row['serialnumber'];?></td>
			<td><?php echo $row['ipaddress'];?></td>
			<td><?php echo $row['type'];?></td>
			<td><?php echo $row['dop'];?></td>
			<td><?php echo $row['username'];?></td>
			<td><a href='update.php?id=<?php echo $row['id']; ?>& description=<?php echo $row['description'];?>& serialnumber=<?php echo $row['serialnumber'];?>& ipaddress=<?php echo $row['ipaddress'];?>& type=<?php echo $row['type'];?>& dop=<?php echo $row['dop'];?>& username=<?php echo $row['username'];?>'>Update</a></td>
			<td><a href='delete.php?id=<?php echo $row['id']; ?>& description=<?php echo $row['description'];?>& serialnumber=<?php echo $row['serialnumber'];?>& ipaddress=<?php echo $row['ipaddress'];?>& type=<?php echo $row['type'];?>& dop=<?php echo $row['dop'];?>& username=<?php echo $row['username'];?>'>Delete</a></td>
		   </tr>
        <?php endwhile;?>	
	        
    </table>
</body>
</html>

