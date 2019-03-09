<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html  xmlns="http://www.w3.org/1999/xhtml"   xml:lang="en">
<head>
<title>
Restaurant List
</title>
</head>
<body>
<a href="index.html">Home</a>
	<br/><br/>
 
<?php $db = mysql_connect("pluto", "lg13", "DBstudent16") or die("The site database appears to be down.");
mysql_select_db("lg13db"); 
 
$rID=$_POST['rID'];
$mID=$_POST['mID'];


$query= "delete from restaurant where restaurant_ID = '$rID' and manager_ID = '$mID';";
mysql_query($query);

$result = mysql_query("SELECT  * FROM restaurant");
 
echo "<h1> Restaurant List </h1>";
echo "<a href='deleteRestaurant_form.html' title= 'Click to Delete Restaurant Information'> Delete Restaurant Information </a> <br/><br/>";
echo "<table border=\"1\">";
echo "<tr><td>restaurant_ID</td><td>restaurant_name</td><td>address</td><td>phone_number</td><td>opening_time</td><td>closing_time</td><td>manager_ID</td><td>item_number</td></tr>";
while ($myrow = mysql_fetch_row($result)) {
      printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
      $myrow[0], $myrow[1], $myrow[2], $myrow[3], $myrow[4], $myrow[5], $myrow[6], $myrow[7] ); 
} echo "</table>"; ?> 
 
</body>
 </html>