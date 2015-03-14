<?php
    require ('steamauth/steamauth.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="main2.css">


</head>
<body>
<div class="top">
</div>

<div class="main">
	<div class="container-fluid">
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-2">
					<div class="logo">
						<div class="pull-right">
							<button onclick="location.href = 'index.php';"><img src= "img/logoSmallSmall.png" ></button>
						</div>
					</div>

	           	</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="menu">
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
			        	<ul class="lower">
			    			<li><a class="youtube" href="https://www.youtube.com">Youtube</a></li>
		          			<li><a class="reddit" href="https://www.reddit.com">Reddit</a></li>
		          			<li><a class="twitch" href="https://www.twitch.net">Twitch</a></li>
			    		</ul>
			        </div>
			    </div>
			    <div class="col-xs-2 col-sm-2 col-md-2">
			    	<div class="steamPic pull-right">
			    		<img src="img/profileMenu.png"/></img>
			    	</div>
				</div>
			    <div class="col-xs-2 col-sm-2 col-md-2">
				    <div class="pull-right">
				    		<div class="login-button">
		                  		<?php
									if(!isset($_SESSION['steamid'])) {

									    steamlogin(); //login button

									}  else {

									    include ('steamauth/userInfo.php'); //To access the $steamprofile array
									    echo "Welcome back " . $steamprofile['personaname'] . "</br>";
									    include ('steamauth/csgoInfo.php');
									    include ('database/writeToUser.php');
									    writeToUser($steamprofile['steamid'], $steamprofile['avatar'],
									     $steamprofile['avatarmedium'], $steamprofile['avatarfull'], $steamprofile['profileurl']);

    									echo "Kills " . $csgoprofile['totalkills'] . "</br>";
									    //Protected content
									    logoutbutton(); //Logout Button
									}
								?>
		                  	</div>
		              	</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>