<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html  xmlns="http://www.w3.org/1999/xhtml"   xml:lang="en">
<head>
<title>
Menu List
</title>
</head>
<body>
<a href="index.html">Home</a>
	<br/><br/>
 
<?php $db = mysql_connect("pluto", "lg13", "DBstudent16") or die("The site database appears to be down.");
mysql_select_db("lg13db"); 
 
$iNo=$_POST['iNo']; 
$iName=$_POST['iName']; 
$iDesc=$_POST['iDesc']; 
$iPrice=$_POST['iPrice']; 


if(!empty($iNo))
{
	$query= "insert into menu(item_number, item_name, description, price) 
	values('$iNo', '$iName', '$iDesc', '$iPrice')"; 
	mysql_query($query); 
}
 
$result = mysql_query("SELECT item_number, item_name, description, price FROM menu order by item_number desc"); 
echo "<h1> Item List </h1>";
echo "<a href='MenuItem_Insert.html' title= 'Click to Add an Item to Menu'> Add an Item </a> <br/><br/>";
echo "<table border=\"1\">";
echo "<tr><td>Item Number</td><td>Item Name</td><td>Description</td><td>Price</td></tr>";
while ($myrow = mysql_fetch_row($result)) {
      printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
      $myrow[0], $myrow[1], $myrow[2], $myrow[3]); 
} echo "</table>"; ?> 
 
</body>
 </html>