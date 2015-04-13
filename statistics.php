<?php include('/menu.php');
$activePage = "statistics.php";
include ('database/displayFunctions.php');
?>

<div class="middle">
	<h1>Statistics</h1>
	<div class="container-fluid">
		<div class="row">
			<ul id="tabs">
				<li><a href="#content1">Tab1</a></li>
				<li><a href="#content2">Tab2</a></li>
				<li><a href="#content3">Tab3</a></li>
			</ul>
		</div>
		<div class="row">
			<div>
				<div>
					<div class="col-xs-12 col-sm-12 col-md-12">
				<h1>Top 10 Money Wellspent</h1>
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
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>
