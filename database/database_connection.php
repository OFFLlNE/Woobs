<?php
function database(){

	$servername = "csgorankings.cloudapp.net";
	$username = "sysadmin";
	$password = "SammalHabe1";
	$db = "csgoRankings";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $db);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}
?>