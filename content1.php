<?php $activePage = "content1.php"; 
include ('database/displayFunctions.php');
?>
<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 id="heading">Top 10 Money Wellspent</h1>
				<div class="boxProfile">
					<table style="width:100%">
					<?php
						MoneyWellSpent();
					?>
					</table>
				</div>
			<h1>Top 10 K/D Ratio</h1>
				<div class="boxProfile">
					<table style="width:100%">
					<?php
						KDRatio();
					?>
					</table>
			</div>
			<h1>Top 10 Nolifers</h1>
				<div class="boxProfile">
					<table style="width:100%">
					<?php
						nolifers();
					?>
					</table>
			</div>
			<h1>Top 10 Headhunters</h1>
				<div class="boxProfile">
					<table style="width:100%">
					<?php
						headhunters();
					?>
					</table>
			</div>
</div>