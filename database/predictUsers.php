<?php 

$q = $_REQUEST["q"];

$hint = "";
if ($q !== "") {
	$q = strtolower($q);
    $len=strlen($q);
	require_once("database_connection.php");
	$conn=database();
								//Query the database
	$resultSet = $conn->query("SELECT userName FROM cs_user_view");
	if($resultSet->num_rows != 0){
		while($rows = $resultSet->fetch_assoc()){
			$name = $rows['userName'];
			if (stristr($q, substr($name, 0, $len))) {
	            if ($hint === "") {
	                $hint = $name;
	            } 
	            else {
	                $hint .= ", $name";
	            }
        	}
    	}
   }
 }
echo $hint === "" ? "no suggestion" : $hint;
?>