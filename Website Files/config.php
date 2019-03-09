<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("pluto.hood.edu","lg13","DBstudent16") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("lg13db",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'pluto.hood.edu';
$databaseName = 'lg13db';
$databaseUsername = 'lg13';
$databasePassword = 'DBstudent16';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
