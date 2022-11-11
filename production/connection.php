
<?php
// syntax
// mysqli_connect("server" , "username" , "password" , "database");
//$conn = mysqli_connect("localhost" , "root" , "" , "2big_wrs_db") or die("Connection Failed");

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "2big_wrs_db";

//create and check connection 
if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Failed to connect!");
}
?>


