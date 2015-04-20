<?php
include('/menu.php');
$activePage = "compare.php";
?>
<div class="middle">
	<h1>Compare</h1>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3">
				<h1 >Player1</h1>
				<div class="profilepic">
					<img src="img/profilepic.png" alt="Relevant textual alternative to the image"/>
				</div>
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2">
				<div class ="predict">
					<form>
						<div class="label_div">Player1: </div>
               				<div class="input_container">
                   				<input type="text" id="username_id" onkeyup="autocompleteUser()">
                    			<ul id="username_list_id"></ul>
                			</div>

					</form>
				</div>
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2">
				<button class="btn btn-default btn-lg">GO</button>

			</div>
			<div class="col-xs-2 col-sm-2 col-md-2">
				<form class="name">
					Player2:
					 <script>
					 jQuery(document).ready(function(){
					    jQuery( "#users" ).autocomplete({
					      source: "database/predictUsers.php",
					      minLength: 2
					    });
					  });
					  </script>
					<!--<br>
					<input type="text" list="UserNames" style="width:100px;">
					<datalist class="UserNames">
						<?php
						require_once("database\database_connection.php");
						$conn=database();
						//Query the database
						$resultSet = $conn->query("SELECT userName FROM cs_user_view");

						if($resultSet->num_rows != 0){
							while($rows = $resultSet->fetch_assoc()){
								$userName = $rows['userName'];
								echo "<option value=''>$userName</option>";

							}
						}
						$conn->close();
						?>
					</datalist>
				</form>
			</div>
			-->
			<div class="userNames">
			  <label for="users"></label>
			  <input id="users">
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3">
				<h1>Player2</h1>
				<div class="profilepic">
					<img src="img/profilepic.png" alt="Relevant textual alternative to the image"/>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>