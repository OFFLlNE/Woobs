<?php
	include("settings.php");
    $url = file_get_contents("http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=".$steamauth['apikey']."&steamid=".$_SESSION['steamid']);
    $content = json_decode($url, true);
    $_SESSION['total_kills'] = $content['playerstats']['stats'][0]['value'];
    $_SESSION['total_deaths'] = $content['playerstats']['stats'][1]['value'];
    $_SESSION['steam_uptodate'] = true;


    $csgoprofile['totalkills'] = $_SESSION['total_kills'];
    $csgoprofile['totaldeaths'] = $_SESSION['total_deaths'];

?>