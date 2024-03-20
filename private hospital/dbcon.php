<?php 

// step1) Establish the MYsql conection

// name of host
$hostname = "localhost";

//user name of database
$db_user = "root";

//password of database
$db_password = "";

// name of database
$db_name = "hospital_database";

// port number of sql server (if you needed for particuler situations)
$sql_port = "3306";
	$connection = mysqli_connect($hostname,$db_user,$db_password,$db_name,$sql_port);
?>