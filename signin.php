<?php
include('/menu.php');
$activePage = "";
if(isset($_SESSION['steamid'])) {
	header("Location: http://csgorankings.azurewebsites.net/profile.php", TRUE, 303);
}
?>
<div class="middle">
	<div class="container-fluid">
		<h1 id="heading">Please sign in to continue</h1>
	</div>
</div>
<?php include 'footer.php';?>
