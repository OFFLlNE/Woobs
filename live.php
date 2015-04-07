<?php
include('/menu.php');
$activePage = "live.php";
?>

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
	<h1>Some Pro player crosshairs</h1>
		<div>
			<a href="crosshairs.php" target="_blank">New tab with different crosshairs will open up</a>
		</div>

</div>
<?php include 'footer.php';?>
