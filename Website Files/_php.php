<?php $db = mysql_connect("pluto", "lg13", "DBstudent16") or die("The site database appears to be down.");
mysql_select_db("lg13db"); 

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM staff ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM staff ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add_form.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>StaffID</td>
		<td>StaffName</td>
		<td>Designation</td>
		<td>PhoneNumber</td>
		<td>Address</td>
		<td>Salary</td>
		<td>ManagerID</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['staff_ID']."</td>";
		echo "<td>".$res['staff_name']."</td>";
		echo "<td>".$res['designation']."</td>";
		echo "<td>".$res['phone_number']."</td>";
		echo "<td>".$res['address']."</td>";
		echo "<td>".$res['salary']."</td>";
		echo "<td>".$res['manager_ID']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
