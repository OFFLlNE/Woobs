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
				<div id = "cs1" class="boxProfile" style="display: none;">
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
			</table>
		</div>
		<div id="cs2" style="display: none;">
			<table class ="cs2" id="t02">
					<tr>
							<th>Nr</th>
							<th>Nimi</th>
							<th>Piirkond</th>
							<th>Erakond</th>
							<th>Hääli</th>
							</tr>
							<tr>
							<td>1</td>
							<td>Karl</td>
							<td>Tartu</td>
							<td>Java</td>
							<td>007</td>
							</tr>
							<tr>
							<td>2</td>
							<td>Hilx</td>
							<td>Tartu</td>
							<td>Java Naiskond</td>
							<td>2</td>
							</tr>
							
						
				</table>
		</div>
		<div id="cs3" style="display: none;">
			<table class ="cs3" id="t02">
					<tr>
							<th>Nr</th>
							<th>Nimi</th>
							<th>Piirkond</th>
							<th>Erakond</th>
							<th>Hääli</th>
							</tr>
							<tr>
							<td>1</td>
							<td>Karl</td>
							<td>Tartu</td>
							<td>Java</td>
							<td>007</td>
							</tr>
							<tr>
							<td>2</td>
							<td>Hilx</td>
							<td>Tartu</td>
							<td>Java Naiskond</td>
							<td>2</td>
							</tr>
							
						
				</table>
		</div>
		</div>

	</div>
<?php include('footer.php');?>