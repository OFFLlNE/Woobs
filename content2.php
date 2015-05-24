<?php $activePage = "content2.php"; 
include ('database/displayFunctions.php');
?>
<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 id="heading">Top 10 Total Kills Headshot</h1>
				<div id = "cs2" class="boxProfile" style="display: none;">
					<table style="width:100%">
					<?php
						totalHeadShotKills();
					?>
					</table>
				</div>
			<h1>Top 10 Total Kills</h1>
				<div class="boxProfile">
					<table style="width:100%">
					<?php
						totalKills();
					?>
					</table>
			</div>
			<h1>Top 10 AWP Kills</h1>
				<div class="boxProfile">
					<table style="width:100%">
					<?php
						total_kills_awp();
					?>
					</table>
			</div>
</div>