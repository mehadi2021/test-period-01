<?php

 include 'auth/connection.php';
 $conn= connect();
$m='';
$result = mysqli_query($conn, "SELECT * FROM registration"); 
?>

<html>

<head>
 <title>Homepage</title>
</head>

<table width='80%' border=0>

 <tr bgcolor='#CCCCCC'>
  <td>Name</td>
  <td>User Name</td>
  <td>Email</td>
  <td>pass</td>
  <td>Edit</td>
 </tr>
 <?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['uName']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td>".$res['pass']."</td>";	
		echo "<td><a href=\"edit.php?name=$res[name]\">Edit</a> | <a href=\"delete.php?name=$res[name]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
</table>
</body>

</html>