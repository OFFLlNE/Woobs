<?php include('/menu.php');
include ('database/displayFunctions.php');
?>

<div class="middle">
	<h1>Statistics</h1>
		<div class="container-fluid">
			<div class="row">			
				<ul id="tabs">
					<li><a id="CSS1">Overall</a></li>
					<li><a id="CSS2">Bestkillers</a></li>
					<li><a id="CSS3">Accuracy</a></li>
				</ul>
			</ol>
			<div class="row">
			<div class = "content_wrapper">
				<div id = "content">
					<div class="col-xs-12 col-sm-12 col-md-12">
			<div id="cs1" style="display: none;">
                       
			<table class="cs1" style="width:100%">
							<th>Username</th>
							<th>Kill/Death ratio</th>
							</tr><tr>
							<?php
								KDRatio();
							?>
			</table>

			<table style="width:100%">
							<th>Username</th>
							<th>Hours played last 2 weeks</th>
							</tr><tr>
							<?php
								nolifers();
							?>	
			</table>

			<table style="width:100%">
							<th>Username</th>
							<th>Best headhunters</th>
							</tr><tr>
							<?php
								headhunters();
							?>
			</table>

		</div>
		<div id="cs2" style="display: none;">
			<table class ="cs2" style="width:100%">
							<th>Username</th>
							<th>Overall kills</th>
							</tr><tr>
							<?php
								totalKills();
							?>
			</table>

			<table style="width:100%">
							<th>Username</th>
							<th>Headshot kills</th>
							</tr><tr>
							<?php
								totalHeadShotKills();
							?>	
			</table>

			<table style="width:100%">
							<th>Username</th>
							<th>Total AWP kills</th>
							</tr><tr>
							<?php
								total_kills_awp();
							?>
			</table>
		</div>
		<div id="cs3" style="display: none;">
			<table class ="cs3" style="width:100%">
							<th>Username</th>
							<th>Rifle Accuracy percentage</th>
							</tr><tr>
							<?php
								rifle_acc();
							?>
							
						
				</table>

				<table style="width:100%">
							<th>Username</th>
							<th>Pistol Accuracy percentage</th>
							</tr><tr>
							<?php
								pistol_acc();
							?>
			</table>

			<table style="width:100%">
							<th>Username</th>
							<th>Sniper Accuracy percentage</th>
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