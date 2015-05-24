<?php
		include_once('update.php');

		$res = $conn -> query("SELECT UserName FROM csgoRankings.User ORDER BY join_date DESC limit 1");
		$result = array();

		while( $row = mysqli_fetch_array($res))
			array_push($result, array ('UserName' => $row[0]));
		echo json_encode(array("result" => $result));
?>