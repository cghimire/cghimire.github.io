<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html  xmlns="http://www.w3.org/1999/xhtml"   xml:lang="en">
<body> 
<?php $db = mysql_connect("pluto", "lg13", "DBstudent16") or die("The site database appears to be down.");
mysql_select_db("lg13db"); 
 
$cname=$_POST['cname']; 
$cstreet=$_POST['cstreet']; 
$ccity=$_POST['ccity']; 

 
$query= "insert into customer (customer_name, customer_street, customer_city) 
values('$cname', '$cstreet', '$ccity')"; 
mysql_query($query); 

 
$result = mysql_query("SELECT * FROM customer order by customer_name"); 
 
echo "<table border=\"1\">\n";
echo "<tr><td>customer_name</td><td>customer_street</td><td>customer_city</tr>\n";
while ($myrow = mysql_fetch_row($result)) {
      printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>",
      $myrow[0], $myrow[1], $myrow[2]); 
} echo "</table>\n"; ?> 
 
</body>
 </html>