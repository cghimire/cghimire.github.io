<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">


<head>
<title>Display High-Income Staff Information</title>
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
     <td colspan="2" style="text-align:center"><h1>Staff Information with High-Income(salary>=$50,000)</h1></td>
  </tr>


<?php $db = mysql_connect("pluto", "lg13", "DBstudent16") or die("The site database appears to be down.");
mysql_select_db("lg13db");

$result = mysql_query("SELECT staff_name, designation, salary FROM staff WHERE salary>= 50000.00 group by salary asc");
$num=mysql_numrows($result);
echo "<table border=1>\n";
echo "<tr><th>Staff Name</th><th>Designation</th><th>Salary</th></tr>\n";
$i=0;
while ($i < $num) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n",
mysql_result($result,$i,"staff_name"),mysql_result($result,$i,"designation"),mysql_result($result,$i,"salary"));
$i++;
}
echo "</table>\n";
?>
</body>
</html>