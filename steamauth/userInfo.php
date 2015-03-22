<?php
	include("settings.php");
    if (empty($_SESSION['steam_uptodate']) or $_SESSION['steam_uptodate'] == false or empty($_SESSION['steam_personaname'])) {
        $url = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$steamauth['apikey']."&steamids=".$_SESSION['steamid']);
        $content = json_decode($url, true);
        $_SESSION['steam_personaname'] = $content['response']['players'][0]['personaname'];
        $_SESSION['steam_avatar'] = $content['response']['players'][0]['avatarfull'];

        $response = $content['response'];
        $stats = $response['players'];
        $insert_into_db = array();
        $info = array("steamid", "communityvisibilitystate",
            "personaname","profileurl","avatar","avatarmedium","avatarfull");

        foreach ($info as $data) {
            $insert_into_db[$data] = $stats[0][$data];
        }
        $_SESSION['steam_uptodate'] = true;
        include("database/writeToUser.php");
        writeToUser($insert_into_db);
    }
     $steamprofile['personaname'] = $_SESSION['steam_personaname'];
     $steamprofile['avatar'] = $_SESSION['steam_avatar'];
?>

