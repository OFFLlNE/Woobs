<?php $activePage = "content3.php"; 
include ('database/displayFunctions.php');
?>
<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 id="heading">Top 10 Pistol Accuracy</h1>
				<div class="boxProfile">
					<table style="width:100%">
					<?php
						pistol_acc();
					?>
					</table>
				</div>
			<h1>Top 10 Rifle Accuracy</h1>
				<div class="boxProfile">
					<table style="width:100%">
					<?php
						rifle_acc();
					?>
					</table>
			</div>
			<h1>Top 10 Sniper Accuracy</h1>
				<div class="boxProfile">
					<table style="width:100%">
					<?php
						sniper_acc();
					?>
					</table>
			</div>
</div>