<!DOCTYPE html>
<html>
	<head>
		<title>Statistics</title>
	</head>
<body>

<?php $activePage = "statistics.php"; 
include ('database/displayFunctions.php');
?>
<div id="navigation">
	<?php include('/menu.php'); ?>
</div>
<div class="middle">
	<h1 id="heading">Statistics</h1>
	<div class="container-fluid">
		<div class="row">	
			<div class="dropdown">
	  				<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
	   					By category
	    				<span class="caret"></span>
	  				</button>
	  				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
	    				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bla</a></li>
	    				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bla</a></li>
	    				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bla</a></li>
	    				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bla</a></li>
	  				</ul>
				</div>
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
	</div>
</div>
<?php include('footer.php');?>
