
<!DOCTYPE html>
<html>
	<head>
		<title>Compare</title>
	</head>
<body>

<?php $activePage = "compare.php"; ?>
<div id="navigation">
	<?php include('/menu.php'); ?>
</div>
<div class="middle">
	<h1 id="heading">Compare</h1>
	<div class="container-fluid">
		<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3">
					<h1 id="heading">Player1</h1>
					<img class="profilepic">
			    		<img src="img/profilepic.png"/>
					</img>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2">
					<form class="name">
						Player1:
						<br>
						<input type="text" list="UserNames" id="color" name="color" style="width:100px;">
						<datalist id="UserNames">
						<?php
						require_once("database\database_connection.php");
						$conn=database();
						//Query the database
						$resultSet = $conn->query("SELECT userName FROM cs_user_view");

						if($resultSet->num_rows != 0){
							while($rows = $resultSet->fetch_assoc()){
								$userName = $rows['userName'];
								echo "<option value=$userName>";

							}
						}
						$conn->close();
						?>
						</datalist>

					</form>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2">
					<button class="btn btn-default btn-lg">GO</button>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2">
					<form class="name">
						Player2:  
						<br>
							<input type="text" list="UserNames" id="color" name="color" style="width:100px;">
							<datalist id="UserNames">
							<?php
						require_once("database\database_connection.php");
						$conn=database();
						//Query the database
						$resultSet = $conn->query("SELECT userName FROM cs_user_view");

						if($resultSet->num_rows != 0){
							while($rows = $resultSet->fetch_assoc()){
								$userName = $rows['userName'];
								echo "<option value=$userName>";

							}
						}
						$conn->close();
						?>
							</datalist>
					</form>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3">
					<h1 id="heading">Player2</h1>
					<img class="profilepic">
			    		<img src="img/profilepic.png"/>
					</img>
				</div>
			</div>
		</div>
	</div>
</div>

<ADDRESS> <A HREF=MAILTO:johanneshorm@hotmail.com>Woobs&copy</A> TÜ Informaatika </ADDRESS>

</body>
</html>