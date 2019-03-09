<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html  xmlns="http://www.w3.org/1999/xhtml" 
<head>
<title>
Oder List
</title>
</head>
<body>
<a href="index.html">Home</a>
	<br/><br/>
 
<?php $db = mysql_connect("pluto", "lg13", "DBstudent16") or die("The site database appears to be down.");
mysql_select_db("lg13db"); 
 
$cID=$_POST['cID']; 
$oNum=$_POST['orderNumber']; 
$NoOfItems=$_POST['numberOfItems']; 
$iName=$_POST['itemName']; 


if(!empty($cID))
{
	$query= "insert into orderfood (order_number, numberof_items, item_name, customer_ID) 
	values('$oNum', '$NoOfItems', '$iName', '$cID')"; 
	mysql_query($query); 
}
 
$result = mysql_query("SELECT order_number, numberof_items, item_name, customer_ID FROM orderfood order by order_number desc"); 
echo "<h1> Order List </h1>";
echo "<a href='Order_Form.html' title= 'Click to Make an Order'> Make an Order </a> <br/><br/>";
echo "<table border=\"1\">";
echo "<tr><td>Order Number</td><td>Number of Items</td><td>Item Name</td><td>Customer ID</td></tr>";
while ($myrow = mysql_fetch_row($result)) {
      printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
      $myrow[0], $myrow[1], $myrow[2], $myrow[3]); 
} echo "</table>"; ?> 
 
</body>
 </html>
