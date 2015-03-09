<!DOCTYPE html>
<html>
<head>
	<title>Support</title>
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
<?php $activePage = "support.php"; ?>
<div id="navigation">
	<?php include('/menu.php'); ?>
</div>
<div class="middle">
	<h1 id="heading">Support</h1>
	<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="donation">
						<h2 id="heading">Donate to our cause: </h2>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_donations">
							<input type="hidden" name="business" value="loll_noob1@hotmail.com">
							<input type="hidden" name="lc" value="US">
							<input type="hidden" name="item_name" value="CSGOrankings">
							<input type="hidden" name="no_note" value="0">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
							<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>

					</div>
				</div>
			</div>
			<h3 id="heading">About us: </h3>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="AboutUs">
						<p>
							We are 3 students in the University of Tartu,
							studying informatics. Since we and many of our
							friends play the game called Counter-Strike:
							Global Offensive,so we thought we should make an
							interesting webpage to track out stats and even
							compare our stats
						</p>
					</div>
					<div class = "Contact">
						<a id="show_id" onclick="document.getElementById('spoiler_id').style.display='';
							document.getElementById('show_id').style.display='none';" class="link">[Questions or suggestions, feel free to contact us]
						</a>
						<span id="spoiler_id" style="display: none">
							<a
								onclick="document.getElementById('spoiler_id').style.display='none'; document.getElementById('show_id').style.display='';" class="link">[Hide]
							</a>
							<br>
								<a href="mailto:valjalauri@gmail.com">Click To send a mail</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

<HR NOSHADE SIZE=7>
<ADDRESS> <A HREF=MAILTO:johanneshorm@hotmail.com>Woobs&copy</A> TÜ Informaatika </ADDRESS>

</body>
</html>