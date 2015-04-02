<?php
    require ('steamauth/steamauth.php');
?><!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8" />
	<meta property="viewport" content="width=device-width, initial-scale=1"/>
	<script type="text/javascript" property='javascript' src="http://code.jquery.com/jquery-latest.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" property='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
	<!-- Optional theme -->
	<link rel="stylesheet" property='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"/>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" property='stylesheet' href="main2.css">
</head>

<body>
	
<?php require('/getSession.php'); ?>
<div class="top">
</div>

<div class="main">
	<div class="container-fluid">
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-2">
					<div class="logo">
						<div class="pull-right">
							<button onclick="location.href = 'index.php';"><img src= "img/logoSmallSmall.png" alt="Logo"></button>
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
			    	<?php
			    		if (isset($_SESSION['steamid'])) {
			    			include ('steamauth/userInfo.php');
				    		$avatar = $steamprofile['avatar'];

				    		echo '<img src=' . $avatar . 'alt="Avatar"/>';
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

							}  else {
								include ('steamauth/userInfo.php'); //To access the $steamprofile array
								$name = $steamprofile['personaname'];
								$avatar = $steamprofile['avatar'];
								echo "<div class='text'><p>Welcome back '{$name}'</p></div>";
								include('redirect.php');
								redirect();
								logoutbutton(); 

							}
						
						?>
		            </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>