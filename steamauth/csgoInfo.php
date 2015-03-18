<?php
	include("settings.php");
    $url = file_get_contents("http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=".$steamauth['apikey']."&steamid=".$_SESSION['steamid']);
    $content = json_decode($url, true);
    	$playerstats = $content['playerstats'];
        $stats = $playerstats['stats'];
        $insert_into_db = array();
        $id = $playerstats['steamID'];
        $insert_into_db['steamID'] = $id;

        $info =  array(
			'total_time_played',
			'total_damage_done',
			'total_kills',
			'total_deaths',
			'total_money_earned',
			'total_kills_headshot',
			'total_shots_hit',
			'total_shots_fired',
			'total_kills_awp',
			'total_shots_awp',
			'total_hits_awp',
			'total_kills_ak47',
			'total_shots_ak47',
			'total_hits_ak47',
			'total_kills_glock',
			'total_shots_glock',
			'total_hits_glock',
			'total_kills_hkp2000',
			'total_shots_hkp2000',
			'total_hits_hkp2000',
			'total_shots_ssg08',
			'total_hits_ssg08',
			'total_kills_ssg08',
			'total_kills_m4a1',
			'total_shots_m4a1',
			'total_hits_m4a1');
        foreach ($stats as $stat) {
            if(array_search($stat['name'], $info)) {
                $insert_into_db[$stat['name']] = $stat['value'];
            }
        }
        $_SESSION['steam_uptodate'] = true;
        include("database/writeToStatistics.php");
        $insert_into_db["total_time_played"] = 0;
        writeToStatistics($insert_into_db);

?>