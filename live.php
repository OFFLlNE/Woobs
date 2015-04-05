
<!DOCTYPE html>
<html>
	<title>Live</title>
<body>

<?php $activePage = "live.php"; ?>
<div id="navigation">
	<?php include('/menu.php'); ?>
</div>
<div class="middle">
	<h1>Live Stream</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<object type="application/x-shockwave-flash" height="240" width="360" data="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf">
						<param name="allowFullScreen" value="true" />
						<param name="allowScriptAccess" value="always" />
						<param name="allowNetworking" value="all" />
						<param name="movie" value="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" />
						<param name="flashvars" value="channel=m0e_tv&amp;auto_play=false&amp;start_volume=25" />
					</object>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-6">
					<object type="application/x-shockwave-flash" height="240" width="360" data="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf">
						<param name="allowFullScreen" value="true" />
						<param name="allowScriptAccess" value="always" />
						<param name="allowNetworking" value="all" />
						<param name="movie" value="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" />
						<param name="flashvars" value="channel=esl_csgo&amp;auto_play=false&amp;start_volume=25" />
					</object>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<object type="application/x-shockwave-flash" height="240" width="360" data="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf">
						<param name="allowFullScreen" value="true" />
						<param name="allowScriptAccess" value="always" />
						<param name="allowNetworking" value="all" />
						<param name="movie" value="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" />
						<param name="flashvars" value="channel=Monstercat&amp;auto_play=false&amp;start_volume=25" />
					</object>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-6">
					<object type="application/x-shockwave-flash" height="240" width="360" data="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf">
						<param name="allowFullScreen" value="true" />
						<param name="allowScriptAccess" value="always" />
						<param name="allowNetworking" value="all" />
						<param name="movie" value="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" />
						<param name="flashvars" value="channel=esl_lol&amp;auto_play=false&amp;start_volume=25" />
					</object>
				</div>
			</div>
		</div>

</div>
<?php include 'footer.php';?>
