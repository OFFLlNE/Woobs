<!DOCTYPE html>
<html>
	<head>
		<title>Statistics</title>
	</head>
<body>

<?php $activePage = "statistics.php"; ?>
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
				<h1 id="heading">Top 10 Total Kills</h1>
				<div class="boxProfile">
					<table style="width:100%">
						<tr>
							<td>Username</td>
							<td>Total Kills</td>
						</tr>
					<?php
					//connect to the database
					$mysqli = NEW MySQLi('eu-cdbr-azure-north-b.cloudapp.net', 'bf3c7cd016fb44', '134bea17','csgorankingsdata');
					//Query the database
					$resultSet = $mysqli->query("SELECT * FROM total_kills_view");

					if($resultSet->num_rows != 0){
						while($rows = $resultSet->fetch_assoc()){
							$username = $rows['UserName'];
							$total_kills = $rows['total_kills'];

							echo "<tr>
							<td>$username</td>
							<td>$total_kills</td>
							</tr>";

						}
					}
		    		
					?>
					</table>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 id="heading">Top 10 last match rating</h1>
				<div class="boxProfile">
		    		<table style="width:100%">
						<tr>
							<td>blablabla</td>
							<td>NUMBER</td>
						</tr>
						<tr>
							<td>jne</td>
							<td>NUMBER</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 id="heading">Top10 K/D ratio</h1>
				<div class="boxProfile">
		    		<table style="width:100%">
						<tr>
							<td>blablabla</td>
							<td>NUMBER</td>
						</tr>
						<tr>
							<td>jne</td>
							<td>NUMBER</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<ADDRESS> <A HREF=MAILTO:johanneshorm@hotmail.com>Woobs&copy</A> TÜ Informaatika </ADDRESS>

</body>
</html>