
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
				<h1 id="heading">Top 10 Money Wellspent</h1>
				<div class="boxProfile">
					<table style="width:100%">
					<?php
					//connect to the database
					require_once("database\database_connection.php");
					$conn=database();
					//Query the database
					$resultSet = $conn->query("SELECT * FROM money_well_spent_view");

					if($resultSet->num_rows != 0){
						while($rows = $resultSet->fetch_assoc()){
							$username = $rows['UserName'];
							$money_well_spent = $rows['money_well_spent'];

							echo "<tr>
							<td>$username</td>
							<td>$money_well_spent</td>
							</tr>";

						}
					}
					else{
						echo"ERROR";
					}
		    		$conn->close();
					?>
					</table>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 id="heading">Top 10 K/D Ratio</h1>
				<div class="boxProfile">
					<table style="width:100%">
					<?php
					//connect to the database
					require_once("database\database_connection.php");
					$conn=database();
					//Query the database
					$resultSet = $conn->query("SELECT * FROM kd_ratio_view");

					if($resultSet->num_rows != 0){
						while($rows = $resultSet->fetch_assoc()){
							$username = $rows['UserName'];
							$kd_ratio = $rows['kd_ratio'];

							echo "<tr>
							<td>$username</td>
							<td>$kd_ratio</td>
							</tr>";

						}
					}
					else{
						echo"ERROR";
					}
		    		$conn->close();
					?>
					</table>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 id="heading">Top 10 Nolifers</h1>
				<div class="boxProfile">
					<table style="width:100%">
					<?php
					//connect to the database
					require_once("database\database_connection.php");
					$conn=database();
					//Query the database
					$resultSet = $conn->query("SELECT * FROM nolifers_view");

					if($resultSet->num_rows != 0){
						while($rows = $resultSet->fetch_assoc()){
							$username = $rows['UserName'];
							$timespent = $rows['timespent'];

							echo "<tr>
							<td>$username</td>
							<td>$timespent</td>
							</tr>";

						}
					}
					else{
						echo"ERROR";
					}
					$conn->close();
		    		
					?>
					</table>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 id="heading">Top 10 Headhunters</h1>
				<div class="boxProfile">
					<table style="width:100%">
					<?php
					//connect to the database
					require_once("database\database_connection.php");
					$conn=database();
					//Query the database
					$resultSet = $conn->query("SELECT * FROM headhunters_view");

					if($resultSet->num_rows != 0){
						while($rows = $resultSet->fetch_assoc()){
							$username = $rows['UserName'];
							$headhunters = $rows['headhunters'];

							echo "<tr>
							<td>$username</td>
							<td>$headhunters</td>
							</tr>";

						}
					}
					else{
						echo"ERROR";
					}
		    		$conn->close();
					?>
					</table>
			</div>
		</div>
	</div>
</div>
<ADDRESS> <A HREF=MAILTO:johanneshorm@hotmail.com>Woobs&copy</A> TÜ Informaatika </ADDRESS>

</body>
</html>