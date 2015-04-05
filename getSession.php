<?php
session_start(); // starts the session
$url = $_SERVER['REQUEST_URI'];
if (strpos($url,'signin.php') !== false) {
   $url2 = str_replace("signin.php", "profile.php", $url);
   $_SESSION['url'] = $url2;

}
else{
	$_SESSION['url'] = $url;
}

?>