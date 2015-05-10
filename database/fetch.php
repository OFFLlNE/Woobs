<?php
		include_once('uuenda.php');

		$sql = "SELECT * FROM csgoRankings.User";
		$res = mysql_query($sql);
		$result = array();

		while( $row = mysql_fetch_array($res))
			array_push($result, array ('SteamID' => $row[0]
										));
		echo json_encode(array("result" => $result));
?>