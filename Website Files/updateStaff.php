<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"   xml:lang="en">
<head>
<title>
Staff List
</title>
</head>
<body>
<a href="index.html">Home</a>
	<br/><br/>
 
<?php $db = mysql_connect("pluto", "lg13", "DBstudent16") or die("The site database appears to be down.");
mysql_select_db("lg13db"); 

	
$sID = $_POST['staff_ID'];
$desig = $_POST['designation'];
$salary = $_POST['salary'];
		

	$query= "UPDATE staff  SET designation= '$desig', salary= '$salary'  WHERE staff_ID='$sID';";
	mysql_query($query); 
  
			
$result = mysql_query("SELECT * FROM staff"); 
		
echo "<h1> Updated Staff List </h1>";
echo "<a href='updateStaff_form.html' title= 'Click to Update Staff Information'> Update Staff </a> <br/><br/>";
echo "<table border=\"1\">";
echo "<tr><td>Staff ID</td><td>Saff Name</td><td>Designation</td><td>Phone Number</td><td>Address</td><td>Salary</td><td>Manager ID</td></tr>";
while ($myrow = mysql_fetch_row($result)) {
      printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
      $myrow[0], $myrow[1], $myrow[2], $myrow[3],$myrow[4],$myrow[5],$myrow[6]); 
} echo "</table>"; ?> 
 
</body>
 </html>		
		



