<?php
    require ('steamauth/steamauth.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>CS:GO Rankings</title>
	<meta property="viewport" content="width=device-width, initial-scale=1"/>
	<meta charset="utf-8"/>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" property='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
	<!-- Optional theme -->
	<link rel="stylesheet" property='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"/>

	<!-- Latest compiled and minified JavaScript -->
	<link rel="stylesheet" property='stylesheet' href="main2.css">
	<link rel="stylesheet" property='stylesheet' href="statistics.css">
</head>

<body>

<?php require('/getSession.php'); ?>
<div class="top">
</div>

<div class="main">
	<div class="container-fluid">
			<div class="row">
				<div class="hidden-xs col-sm-2 col-md-2">
					<div class="logo pull-right">
						<button onclick="location.href = 'index.php';"><img src= "img/logoSmallSmall.jpg" alt="Logo"></button>
					</div>

	           	</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="menu">
					<?php $activePage = ""; ?>
						<ul>
			          		<li><a <?php if ($activePage =="profile.php") {?> class="active" <?php } ?>
			          		 class="profile" href="profile.php">Profile</a></li>
			          		<li><a <?php if ($activePage =="statistics.php") {?> class="active" <?php } ?>
			          		 class="stats" href="statistics.php">Statistics</a></li>
			          		<li><a <?php if ($activePage =="compare.php") {?> class="active" <?php } ?>
			          		 class="compare" href="compare.php">Compare</a></li>
			          		<li><a <?php if ($activePage =="live.php") {?> class="active" <?php } ?>
			          		 class="live" href="live.php">Live</a></li>
			          		<li><a <?php if ($activePage =="support.php") {?> class="active" <?php } ?>
			          		 class="support" href="support.php">Support</a></li>
			        	</ul>
			        	<ul class="extra">
			    			<li><a class="youtube" href="https://www.youtube.com">Youtube</a></li>
		          			<li><a class="reddit" href="https://www.reddit.com">Reddit</a></li>
		          			<li><a class="twitch" href="http://www.twitch.tv/">Twitch</a></li>
			    		</ul>

			    		<select name="myselect" onchange="redirectMe(this);">
						    <option value="index.php" selected="selected">Home</option>
						    <option value="profile.php">Profile</option>
						    <option value="statistics.php">Statistics</option>
						    <option value="compare.php">Compare</option>
						    <option value="live.php">Live</option>
						    <option value="support.php">Support</option>
						</select>
			        </div>
			    </div>
			    <div class="col-xs-4 col-sm-2 col-md-2">
			    	<div class="steamPic pull-right">
			    	<?php
			    		if (isset($_SESSION['steamid'])) {
			    			include ('steamauth/userInfo.php');
				    		$avatar = $steamprofile['avatar'];

				    		echo '<img src="' . $avatar . '" alt="Avatar"/>';
			    	}
			    	else{
			    		echo '<img src="img/bck.png" alt="Default"/>';
			    	}
			    	?>
			    	</div>
				</div>
			    <div class="col-xs-2 col-sm-2 col-md-2">
				    <div class="login-button pull-right">
		                 <?php
							if(!isset($_SESSION['steamid'])) {
								$_SESSION['redirect'] = false;
								steamlogin();
								$_SESSION['write'] = false;

							}  else {
								if($_SESSION['write'] === false){
									include_once ('steamauth/userInfo.php'); //To access the $steamprofile array
									include_once('steamauth/csgoInfo.php');
									include('redirect.php');
									redirect();
									$_SESSION['write'] = true;
								}
								$name = $steamprofile['personaname'];
								$avatar = $steamprofile['avatar'];

								echo "<div class='text'><p>Welcome back '{$name}'</p></div>";

								logoutbutton();

							}

						?>
		            </div>
				</div>
			</div>
		</div>
	</div>
