<?php
session_start(); // starts the session
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>