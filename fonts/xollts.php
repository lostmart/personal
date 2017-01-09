<?php
//1. Create a database connection
	$dbhost = "sarlnoel.ipowermysql.com";
	$dbuser = "mart";
	$dbpass = "Thelost100.";
	$dbname = "spiritstours";
	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	//Test if query occurred.
	if(mysqli_connect_errno()){
		die("Database connection failed: " .
		mysqli_connect_error() .
		" (" . mysqli_connect_errno() . ")"
		);	
	}
?>