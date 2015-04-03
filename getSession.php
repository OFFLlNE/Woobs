<?php
session_start(); // starts the session
$url = $_SERVER['REQUEST_URI'];
$pieces = explode("/",$url);
$contains = false;
foreach ($pieces as $data) {

	if (strpos($data,'signin.php') !== false) {
    	$contains = true;
	}
}

if($contains == false){
	$_SESSION['url'] = $url;
}
?>