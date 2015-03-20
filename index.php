<!DOCTYPE html>
<html>
	<title>Home</title>
<body>

<?php $activePage = ""; ?>
<div id="navigation">
	<?php include('/menu.php'); ?>
</div>
<div class="middle">
	<div class="base">
		<div class="thumbnail">
			<img src="img/base.gif"/>
		</div>
	</div>
</div>

<div class="statistics">
	<div class="heading">
			<h1>Top 10 Total Kills</h1>
	</div>

	<div class="boxMain">
	    <table style="width:100%">
						<tr>
							<td>Username</td>
							<td>Total Kills</td>
						</tr>
					<?php
					//connect to the database
					require_once("database\database_connection.php");
					$conn=database();
					//Query the database
					$resultSet = $conn->query("SELECT * FROM total_kills_view");

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
					else{
						echo"ERROR";
					}
		    		
					?>
					</table>

	</div>
</div>
<div class="top">
</div>

<ADDRESS> <A HREF=MAILTO:johanneshorm@hotmail.com>Woobs&copy</A> TÜ Informaatika </ADDRESS>

</body>
</html>