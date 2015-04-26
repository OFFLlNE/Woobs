<?php include('/menu.php');
$activePage = "statistics.php";
include ('database/displayFunctions.php');
?>

<div class="middle">
	<h1>Statistics</h1>
	<div class="container-fluid">
		<div class="row">
			<ul id="tabs">
				<a id="C1" href="#content1">Overall</a>
				<a id="C2" href="#content2">Best Killers</a>
			</ul>
		</div>
		<div id="cs1" style="display: none;">
                       
			<table class="cs1" id ="t01">
			<h1>Top 10 K/D Ratio</h1>
				<div>
					<table style="width:100%">
					<?php
						KDRatio();
					?>
					</table>
			</div>
			</table>
				</div>
		<div id="cs2" style="display: none;">
			<table class ="cs2" id="t02">
			<h1>Top 10 Total Kills</h1>
				<div>
					<table style="width:100%">
					<?php
						totalKills();
					?>
					</table>
			</div>
				</table>
		</div>

		</div>

	</div>
<?php include('footer.php');?>
