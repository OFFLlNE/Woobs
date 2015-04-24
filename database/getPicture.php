<?php
	//connect to the database
		require_once("database_connection.php");
		$conn=database();
		//Query the database
		$steamID = '';
		$steamID = $_POST['steamID'];
		if($steamID === ""){
			$result = "ErrorID :(";
			$results = [$result];
			echo json_encode($results);
		}

		$result = "";
		$resultSet = $conn->query("SELECT avatar_full FROM csgoRankings.User WHERE steamID =".$steamID."");

		if($resultSet->num_rows != 0){
			while($rows = $resultSet->fetch_assoc()){
				$avatar = $rows['avatar_full'];
				$result = "
				<img src='{avatar}'alt='Avatar'/>
				";
			$results = [$result];
			echo json_encode($results);

			}
		}
		else{
			$result = "Error :(";
			$results = [$result];
			echo json_encode($results);
		}
		$conn->close();
?>