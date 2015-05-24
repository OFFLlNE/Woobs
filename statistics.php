<?php include('/menu.php');
$activePage = "statistics.php";
include ('database/displayFunctions.php');
?>

<div class="middle">
	<h1>Statistics</h1>
	<div class="container-fluid">
		<ul id="tabs">
			<li><a id="CSS1">Overall</a></li>
			<li><a id="CSS2">Bestkillers</a></li>
			<li><a id="CSS3">Accuracy</a></li>
		</ul>
		<div class="row">
			<div class="content_wrapper">
				<div class="content">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div id="cs1">
							<h1>Top 10 Money Wellspent</h1>
							<div class="boxProfile">
								<table style="width:100%">
								<th>Username</th>
								<th>Total money spent / total damage ratio</th>
								</tr><tr>
								<?php
									MoneyWellSpent();
								?>
								</table>
							</div>
							<h1>Top 10 K/D Ratio</h1>
							<div class="boxProfile">
								<table style="width:100%">
								<th>Username</th>
								<th>Kill/Death ratio</th>
								</tr><tr>
								<?php
									KDRatio();
								?>
								</table>
							</div>
							<h1>Top 10 Nolifers</h1>
							<div class="boxProfile">
								<table style="width:100%">
								<th>Username</th>
								<th>Hours played last 2 weeks</th>
								</tr><tr>
								<?php
									nolifers();
								?>
								</table>
							</div>
							<h1>Top 10 Headhunters</h1>
							<div class="boxProfile">
								<table style="width:100%">
								<th>Username</th>
								<th>Headshot kills / total kill ratio</th>
								</tr><tr>
								<?php
									headhunters();
								?>
								</table>
							</div>
						</div>
						<div id="cs2" style="display: none;">
							<h1>Top 10 Total Kills Headshot</h1>
							<div class="boxProfile">
								<table style="width:100%">
								<th>Username</th>
								<th>Headshot kills</th>
								</tr><tr>
								<?php
									totalHeadShotKills();
								?>
								</table>
								</div>
							<h1>Top 10 Total Kills</h1>
							<div class="boxProfile">
								<table style="width:100%">
								<th>Username</th>
								<th>Total kills</th>
								</tr><tr>
								<?php
									totalKills();
								?>
								</table>
							</div>
							<h1>Top 10 AWP Kills</h1>
							<div class="boxProfile">
								<table style="width:100%">
								<th>Username</th>
								<th>Total AWP kills</th>
								</tr><tr>
								<?php
									total_kills_awp();
								?>
								</table>
							</div>
						</div>
						<div id="cs3" style="display: none;">
							<h1>Top 10 Pistol Accuracy</h1>
							<div class="boxProfile">
								<table style="width:100%">
								<th>Username</th>
								<th>Pistol accuracy(starting pistols)</th>
								</tr><tr>
								<?php
									pistol_acc();
								?>
								</table>
							</div>
							<h1>Top 10 Rifle Accuracy</h1>
							<div class="boxProfile">
								<table style="width:100%">
								<th>Username</th>
								<th>AK/M4 accuracy</th>
								</tr><tr>
								<?php
									rifle_acc();
								?>
								</table>
							</div>
							<h1>Top 10 Sniper Accuracy</h1>
							<div class="boxProfile">
								<table style="width:100%">
								<th>Username</th>
								<th>AWP/Scout accuracy</th>
								</tr><tr>
								<?php
									sniper_acc();
								?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>