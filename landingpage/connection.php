<?php  

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "2big_wrs_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Failed to connect!");
}


?>