<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<title>Display 1</title>
</head>
<body>
<?php $db = mysql_connect("pluto.hood.edu", "lg13", "DBstudent16") or die("The site database appears to be down.");
mysql_select_db("lg13db");

$result = mysql_query("select c.customer_name,c.customer_city from customer c,borrower b, loan L where c.customer_name=b.customer_name and b.loan_number=L.loan_number and L.branch_name='Perryridge';
");

$num=mysql_numrows($result);
echo "<table border=1>\n";
echo "<tr><th>Customer_Name</th><th>Customer_City</th></tr>\n";

$i=0;
while ($i < $num) {
printf("<tr><td>%s</td><td>%s</td></tr>\n",
mysql_result($result,$i,"customer_name"), mysql_result($result,$i,"customer_city"), mysql_result($result,$i,"salary"));
$i++;
}
echo "</table>\n";
?>

</body>
</body>
</html>


