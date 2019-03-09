<?php $db = mysql_connect("pluto", "lg13", "DBstudent16") or die("The site database appears to be down.");
mysql_select_db("lg13db");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM staff WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>

