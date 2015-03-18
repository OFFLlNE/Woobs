<?php
	include("settings.php");
    if (empty($_SESSION['steam_uptodate']) or $_SESSION['steam_uptodate'] == false or empty($_SESSION['steam_personaname'])) {
        $url = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$steamauth['apikey']."&steamids=".$_SESSION['steamid']);
        $content = json_decode($url, true);
        $_SESSION['steam_personaname'] = $content['response']['players'][0]['personaname'];

        $playerstats = $content['response'];
        $stats = $content['players'];
        $insert_into_db = array();
        $info = array("steam_steamid", "steam_communityvisibilitystate",
            "steam_personaname","steam_profileurl","steam_avatar","steam_avatarmedium","steam_avatarfull");

        foreach ($stats as $stat) {
            if(array_search($stat['name'], $info)) {
                $insert_into_db[$stat['name']] = $stat['value'];
            }
        }
        $_SESSION['steam_uptodate'] = true;
        include("database/writeToUser.php");
        echo $insert_into_db['steam_steamid']
        writeToUser($insert_into_db);
    }
     $steamprofile['personaname'] = $_SESSION['steam_personaname'];
?>

