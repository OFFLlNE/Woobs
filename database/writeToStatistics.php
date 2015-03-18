<?php

function writeToStatistics($csgoProfile) {
	$steamID = $csgoProfile['steamID'];
	$total_time_played = $csgoProfile['total_time_played'];
	$total_damage_done = $csgoProfile['total_damage_done'];
	$total_kills = $csgoProfile['total_kills'];
	$total_deaths = $csgoProfile['total_deaths'];
	$total_money_earned = $csgoProfile['total_money_earned'];
	$total_kills_headshot = $csgoProfile['total_kills_headshot'];
	$total_shots_hit = $csgoProfile['total_shots_hit'];
	$total_shots_fired = $csgoProfile['total_shots_fired'];
	$total_kills_awp = $csgoProfile['total_kills_awp'];
	$total_shots_awp = $csgoProfile['total_shots_awp'];
	$total_hits_awp = $csgoProfile['total_hits_awp'];
	$total_kills_ak47 = $csgoProfile['total_kills_ak47'];
	$total_shots_ak47 = $csgoProfile['total_shots_ak47'];
	$total_hits_ak47 = $csgoProfile['total_hits_ak47'];
	$total_kills_glock = $csgoProfile['total_kills_glock'];
	$total_shots_glock = $csgoProfile['total_shots_glock'];
	$total_hits_glock = $csgoProfile['total_hits_glock'];
	$total_kills_hkp2000 = $csgoProfile['total_kills_hkp2000'];
	$total_shots_hkp2000 = $csgoProfile['total_shots_hkp2000'];
	$total_hits_hkp2000 = $csgoProfile['total_hits_hkp2000'];
	$total_shots_ssg08 = $csgoProfile['total_shots_ssg08'];
	$total_hits_ssg08 = $csgoProfile['total_hits_ssg08'];
	$total_kills_ssg08 = $csgoProfile['total_kills_ssg08'];
	$total_kills_m4a1 = $csgoProfile['total_kills_m4a1'];
	$total_shots_m4a1 = $csgoProfile['total_shots_m4a1'];
	$total_hits_m4a1 = $csgoProfile['total_hits_m4a1'];

	include("database_connection.php");
	$conn=database();
	$query = "SELECT * FROM csgorankingsdata.statistics WHERE steamID = '{$steamID}'";
	$result = mysqli_query($conn ,$query) or die(mysqli_error($conn));
	 if(mysqli_num_rows($result) == 0){
	 	$sql = "INSERT INTO csgorankingsdata.statistics (
			SteamID,
			total_time_played,
			total_damage_done,
			total_kills,
			total_deaths,
			total_money_earned,
			total_kills_headshot,
			total_shots_hit,
			total_shots_fired,
			total_kills_awp,
			total_shots_awp,
			total_hits_awp,
			total_kills_ak47,
			total_shots_ak47,
			total_hits_ak47,
			total_kills_glock,
			total_shots_glock,
			total_hits_glock,
			total_kills_hkp2000,
			total_shots_hkp2000,
			total_hits_hkp2000,
			total_kills_ssg08,
			total_shots_ssg08,
			total_hits_ssg08,
			total_kills_m4a1,
			total_shots_m4a1,
			total_hits_m4a1)

		VALUES (
			'{$steamID}',
			{$total_time_played},
			{$total_damage_done},
			{$total_kills},
			{$total_deaths},
			{$total_money_earned},
			{$total_kills_headshot},
			{$total_shots_hit},
			{$total_shots_fired},
			{$total_kills_awp},
			{$total_shots_awp},
			{$total_hits_awp},
			{$total_kills_ak47},
			{$total_shots_ak47},
			{$total_hits_ak47},
			{$total_kills_glock},
			{$total_shots_glock},
			{$total_hits_glock},
			{$total_kills_hkp2000},
			{$total_shots_hkp2000},
			{$total_hits_hkp2000},
			{$total_kills_ssg08},
			{$total_shots_ssg08},
			{$total_hits_ssg08},
			{$total_kills_m4a1},
			{$total_shots_m4a1},
			{$total_hits_m4a1}
					)";
			if (mysqli_query($conn, $sql)) {
    			echo "";
			}
			else {
    			echo "Error updating record: " . mysqli_error($conn);
			}
		}
		else{
			$sql = "UPDATE statistics SET
				total_time_played = {$total_time_played},
				total_damage_done = {$total_damage_done},
				total_kills = {$total_kills},
				total_deaths = {$total_deaths},
				total_money_earned = {$total_money_earned},
				total_kills_headshot = {$total_kills_headshot},
				total_shots_hit = {$total_shots_hit},
				total_shots_fired = {$total_shots_fired},
				total_kills_awp = {$total_kills_awp},
				total_shots_awp = {$total_shots_awp},
				total_hits_awp = {$total_hits_awp},
				total_kills_ak47 = {$total_kills_ak47},
				total_shots_ak47 = {$total_shots_ak47},
				total_hits_ak47 = {$total_hits_ak47},
				total_kills_glock = {$total_kills_glock},
				total_shots_glock = {$total_shots_glock},
				total_hits_glock = {$total_hits_glock},
				total_kills_hkp2000 = {$total_kills_hkp2000},
				total_shots_hkp2000 = {$total_shots_hkp2000},
				total_hits_hkp2000 = {$total_hits_hkp2000},
				total_kills_ssg08 = {$total_kills_ssg08},
				total_shots_ssg08 = {$total_shots_ssg08},
				total_hits_ssg08 = {$total_hits_ssg08},
				total_kills_m4a1 = {$total_kills_m4a1},
				total_shots_m4a1 = {$total_shots_m4a1},
				total_hits_m4a1 = {$total_hits_m4a1}
				 WHERE steamID='{$steamID}'
				)";

		}

		if (mysqli_query($conn, $sql)) {
		    echo "";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

mysqli_close($conn);

}
?>