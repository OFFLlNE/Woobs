<?php include('/menu.php');
$activePage = "statistics.php";
include ('database/displayFunctions.php');
?>

<div class="container">
		<div class="middle">
			<ol class="singleline">			
				<li>
					<a id="CS1">Overall</a>
					<a id="CS2">Best killers</a>
					<a id="CS3">Accuracy</a>
				</li>
			</ol>
			<div id="cs1" style="display: none;">
                       
			<table class="cs1" id ="t01">
				<h1 id="heading">Top 10 Money Wellspent</h1>
					<?php
						MoneyWellSpent();
					?>
			</table>
		</div>
		<div id="cs2" style="display: none;">
			<table class ="cs2" id="t02">
					<h1 id="heading">Top 10 Total Kills Headshot</h1>
						<?php
						totalHeadShotKills();
					?>
							
						
				</table>
		</div>
		<div id="cs3" style="display: none;">
			<table class ="cs3" id="t03">
					<h1 id="heading">Top 10 Pistol Accuracy</h1>
						<?php
						pistol_acc();
					?>
							
						
				</table>
		</div>
		</div>

	</div>
<?php include('footer.php');?>