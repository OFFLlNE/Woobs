<?php
error_reporting(E_ALL); ini_set("display_errors", 1);
require_once("database_connection.php");

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT userName, steamID FROM cs_user_view WHERE userName LIKE (:keyword) ORDER BY userName ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
echo json_encode($list);
die();
?>