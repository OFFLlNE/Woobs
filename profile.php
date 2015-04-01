<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
	</head>
<body>

<?php $activePage = "profile.php"; ?>
<div id="navigation">
	<?php include('/menu.php'); ?>
</div>
<div class="middle">
	<h1 id="heading">Profile</h1>
	<div class="container-fluid">
		<div class="row">
			<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3">


				<?php
			    	if (isset($_SESSION['steamid'])) {
			    		include ('steamauth/userInfo.php');
				    	$avatar = $steamprofile['avatar'];

				    	echo '<img src=' . $avatar . ' class="img-circle"/>';
			    	}
			    	else{
			    		echo '<img src="img/profilepic.png" class="img-circle"/>';
			    	}
			    ?>

			</div>
			<div class="col-xs-9 col-sm-9 col-md-9">
				<h1 id="heading">Overall Statistics</h1>
				<div class="boxProfile">
		    		<table style="width:100%">
						<tr>
							<td>blablabla</td>
							<td>NUMBER</td>
						</tr>
						<tr>
							<td>jne</td>
							<td>NUMBER</td>
						</tr>
						<tr>
							<td>blablabla</td>
							<td>NUMBER</td>
						</tr>
						<tr>
							<td>jne</td>
							<td>NUMBER</td>
						</tr>
						<tr>
							<td>blablabla</td>
							<td>NUMBER</td>
						</tr>

					</table>
				</div>
			</div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3">
				<h1 id="heading">Ratings</h1>
				<div class="boxProfile">
		    		<table style="width:100%">
						<tr>
							<td>blablabla</td>
							<td>NUMBER</td>
						</tr>
						<tr>
							<td>jne</td>
							<td>NUMBER</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<ADDRESS> <A HREF=MAILTO:johanneshorm@hotmail.com>Woobs&copy</A> TÜ Informaatika </ADDRESS>

</body>
</html>