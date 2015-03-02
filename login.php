<?php
$servername = "ouvcutnxpc.database.windows.net";
$username = "csgorankingsdatabase";
$password = "SammalHabe1";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>