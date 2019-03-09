<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">


<head>
<title>Display Menu</title>
</head>

<style type="text/css">
th {color: maroon;
background-color: silver;}
</style>
</head>


<body>
       <a href="index.html">Home</a>
	<br/><br/>
  <tr>
     <td colspan="2" style="text-align:center"><h1>Menu Items</h1></td>
  </tr>


<?php $db = mysql_connect("pluto", "lg13", "DBstudent16") or die("The site database appears to be down.");
mysql_select_db("lg13db");

$result = mysql_query("SELECT item_number, item_name, description, price FROM menu order by item_number desc");
$num=mysql_numrows($result);
echo "<table border=1>\n";
echo "<tr><th>Item Number</th><th>Item Name</th><th>Description</th><th>Price</th></tr>\n";
$i=0;
while ($i < $num) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n",
mysql_result($result,$i,"item_number"), mysql_result($result,$i,"item_name"),mysql_result($result,$i,"description"),mysql_result($result,$i,"price"));
$i++;
}
echo "</table>\n";
?>

<tr>
     <td colspan="2" style="text-align:center"><h3><a href="Menu_Display_Sale_Items.php">Sale Items</a></h3></td>
  </tr>

</body>
</html>