<?php
$server = "tcp:ouvcutnxpc.database.windows.net";
$user = "woobs"@SERVER_ID;
$pwd = "SammalHabe1";
$db = "csgorankingsdatabase";

$conn = sqlsrv_connect($server, array("UID"=>$user, "PWD"=>$pwd, "Database"=>$db));
echo "$conn";

if($conn === false){
    die(print_r(sqlsrv_errors()));
}
echo "Connected successfully";
?>