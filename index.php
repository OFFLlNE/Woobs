<!DOCTYPE html>
<html>
	<title>Home</title>
<body>

<?php $activePage = ""; 
include ('database/displayFunctions.php');
?>
<div id="navigation">
	<?php include('/menu.php'); ?>
</div>
<div class="middle">
	<div class="base">
		<div class="thumbnail">
			<img src="img/base.gif" alt="CS:GO Rankings"/>
		</div>
	</div>
</div>

<div class="statistics">

	<div class="users_statistics">
		<?php
					//connect to the database
					require_once("database\database_connection.php");
					$conn=database();
					//Query the database
					$resultSet = $conn->query("SELECT * FROM users_count_view");

					if($resultSet->num_rows != 0){
						while($rows = $resultSet->fetch_assoc()){
							$users = $rows['users'];

							echo "<h4 class='heading'>
							Registered users: $users
							</h4>";

						}
					}
					else{
						echo"ERROR";
					}
		    		$conn->close();
		?>

		<?php
					//connect to the database
					require_once("database\database_connection.php");
					$conn=database();
					//Query the database
					$resultSet = $conn->query("SELECT * FROM users_cs_count_view");

					if($resultSet->num_rows != 0){
						while($rows = $resultSet->fetch_assoc()){
							$users = $rows['users_with_cs'];

							echo "<h4 class='heading'>
							Registered users with CS:GO: $users
							</h4>";

						}
					}
					else{
						echo"ERROR";
					}
		    		$conn->close();
		?>
	</div>

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
					totalKills();
					?>
					</table>

	</div>
</div>
<div class="top">
</div>
</body>
<?php include 'footer.php';?>
