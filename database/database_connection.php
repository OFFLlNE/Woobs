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
function connect() {
    return new PDO('mysql:host=csgorankings.cloudapp.net;dbname=csgoRankings', 'sysadmin', 'SammalHabe1', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
?>