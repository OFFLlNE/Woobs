
<?php
require_once("database_connection.php");

$pdo = $connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT userName, SteamID FROM cs_user_view WHERE userName LIKE (:keyword) ORDER BY userName ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$username = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['username']);
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['username']).'\')">'.$username.'</li>';
}
?>