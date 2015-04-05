<!DOCTYPE html>
<html>
	<head>
		<title>SignIn</title>
	</head>
<body>

<?php
if(isset($_SESSION['steamid'])) {
	header("Location: http://csgorankings.azurewebsites.net/profile.php", TRUE, 303);
	exit
}
$activePage = ""; 
?>
<div id="navigation">
	<?php include('/menu.php'); ?>
</div>
<div class="middle">
	<div class="container-fluid">
		<h1 id="heading">Please sign in to continue</h1>
	</div>
</div>
<?php include 'footer.php';?>
