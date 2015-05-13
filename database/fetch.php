<?php
		include_once('update.php');

		$sql = "SELECT * FROM csgoRankings.User";
		$res = $conn -> query("SELECT * FROM csgoRankings.User");
		$result = array();

		while( $row = mysqli_fetch_array($res))
			array_push($result, array ('SteamID' => $row[0],
									   'UserName' => $row[1]
										));
		echo json_encode(array("result" => $result));
?>