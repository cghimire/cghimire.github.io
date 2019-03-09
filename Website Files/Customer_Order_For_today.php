<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"


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
     <td colspan="2" style="text-align:center"><h1>What did customers order today?</h1></td>
  </tr>


<?php $db = mysql_connect("pluto", "lg13", "DBstudent16") or die("The site database appears to be down.");
mysql_select_db("lg13db");

$result = mysql_query("select c.customer_ID, o.order_number, b.amount, o.item_name from customer_res c, orderfood o, bill b where c.customer_ID=o.customer_ID and c.customer_ID=b.customer_ID and c.customer_ID=o.customer_ID order by customer_ID");
$num=mysql_numrows($result);
echo "<table border=1>\n";
echo "<tr><th>Customer ID</th><th>Order Number</th><th>Amount</th><th>Item Name</th></tr>\n";
$i=0;
while ($i < $num) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n",
mysql_result($result,$i,"customer_ID"), mysql_result($result,$i,"order_number"),mysql_result($result,$i,"amount"),mysql_result($result,$i,"item_name"));
$i++;
}
echo "</table>\n";
?>
</body>
</html>
