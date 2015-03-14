<?php
	include("settings.php");
    if (empty($_SESSION['steam_uptodate']) or $_SESSION['steam_uptodate'] == false or empty($_SESSION['steam_personaname'])) {
        $url = file_get_contents("http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=".$steamauth['apikey']."&steamid=".$_SESSION['steamid']);
        $content = json_decode($url, true);
        $_SESSION['total_kills'] = $content;
        $_SESSION['total_deaths'] = $content['playerstats']['stats'][1]['value'];
        $_SESSION['steam_uptodate'] = true;
    }

    $csgoprofile['totalkills'] = $_SESSION['total_kills'];
    $csgoprofile['totaldeaths'] = $_SESSION['total_deaths'];

?>