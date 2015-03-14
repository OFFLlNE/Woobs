<?php
	include("settings.php");
    if (empty($_SESSION['steam_uptodate']) or $_SESSION['steam_uptodate'] == false or empty($_SESSION['steam_personaname'])) {
        $url = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$steamauth['apikey']."&steamids=".$_SESSION['steamid']);
        $content = json_decode($url, true);
        $_SESSION['steam_steamid'] = $content['response']['players'][0]['steamid'];
        $_SESSION['steam_communityvisibilitystate'] = $content['response']['players'][0]['communityvisibilitystate'];
        $_SESSION['steam_personaname'] = $content['response']['players'][0]['personaname'];
        $_SESSION['steam_profileurl'] = $content['response']['players'][0]['profileurl'];
        $_SESSION['steam_avatar'] = $content['response']['players'][0]['avatar'];
        $_SESSION['steam_avatarmedium'] = $content['response']['players'][0]['avatarmedium'];
        $_SESSION['steam_avatarfull'] = $content['response']['players'][0]['avatarfull'];
        $_SESSION['steam_uptodate'] = true;
    }

    $steamprofile['steamid'] = $_SESSION['steam_steamid'];
    $steamprofile['communityvisibilitystate'] = $_SESSION['steam_communityvisibilitystate'];
    $steamprofile['personaname'] = $_SESSION['steam_personaname'];
    $steamprofile['profileurl'] = $_SESSION['steam_profileurl'];
    $steamprofile['avatar'] = $_SESSION['steam_avatar'];
    $steamprofile['avatarmedium'] = $_SESSION['steam_avatarmedium'];
    $steamprofile['avatarfull'] = $_SESSION['steam_avatarfull'];

?>

