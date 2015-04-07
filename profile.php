<?php include('/menu.php');
$activePage = "profile.php";
include ('database/displayFunctions.php');
?>

<div class="middle">

	<div class="container-fluid">
		<div class="row">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3">
					<h1>Profile</h1>
					<?php
				    	if(isset($_SESSION['steamid'])) {
				    		include ('steamauth/userInfo.php');
					    	$avatar = $steamprofile['avatar'];

					    	echo '<img src=' . $avatar . ' class="img-circle"/>';
				    	}
				    	else{
							$_SESSION['url'] = "http://csgorankings.azurewebsites.net/profile.php";
				    		header("Location: http://csgorankings.azurewebsites.net/signin.php");
				    	}
				    ?>
				    <h1>Ratings</h1>
				<div class="boxProfile">
		    		<table style="width:100%">
		    		<?php
		    			overallStats($_SESSION['steamid']);
		    		?>
					</table>
				</div>

				</div>
				<div class="col-xs-9 col-sm-9 col-md-9">
					<h1>Overall Statistics</h1>
					<div class="boxProfile">
						<table style="width:100%">
							<?php
								displayUserdataTable($_SESSION['steamid']);
							?>
						</table>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<?php include 'footer.php';?>
