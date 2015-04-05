<?php
	function displayUserdataTable($steamID){			
	//connect to the database
						require_once("database\database_connection.php");
						$conn=database();
						//Query the database
						$resultSet = $conn->query("SELECT * FROM csgoRankings.Statistics WHERE steamID =".$steamID."");

						if($resultSet->num_rows != 0){
							while($rows = $resultSet->fetch_assoc()){
								$total_time_played = intval($rows['total_time_played'])/60;
								$time_played_2weeks = intval($rows['time_played_2w'])/60;
								$total_damage_done = $rows['total_damage_done'];
								$total_kills = $rows['total_kills'];
								$total_deaths = $rows['total_deaths'];
								$total_money_earned = $rows['total_money_earned'];
								$total_kills_headshot = $rows['total_kills_headshot'];
								$total_shots_hit = $rows['total_shots_hit'];
								$total_shots_fired = $rows['total_shots_fired'];
								$total_kills_awp = $rows['total_kills_awp'];
								$total_shots_awp = $rows['total_shots_awp'];
								$total_hits_awp = $rows['total_hits_awp'];
								$total_kills_ak47 = $rows['total_kills_ak47'];
								$total_shots_ak47 = $rows['total_shots_ak47'];
								$total_hits_ak47 = $rows['total_hits_ak47'];
								$total_kills_glock = $rows['total_kills_glock'];
								$total_shots_glock = $rows['total_shots_glock'];
								$total_hits_glock = $rows['total_hits_glock'];
								$total_kills_hkp2000 = $rows['total_kills_hkp2000'];
								$total_shots_hkp2000 = $rows['total_shots_hkp2000'];
								$total_hits_hkp2000 = $rows['total_hits_hkp2000'];
								$total_shots_ssg08 = $rows['total_shots_ssg08'];
								$total_hits_ssg08 = $rows['total_hits_ssg08'];
								$total_kills_ssg08 = $rows['total_kills_ssg08'];
								$total_kills_m4a1 = $rows['total_kills_m4a1'];
								$total_shots_m4a1 = $rows['total_shots_m4a1'];
								$total_hits_m4a1 = $rows['total_hits_m4a1'];

								echo "<tr>
								<td>Total time played</td>
								<td>{$total_time_played}</td>
								</tr>
								<tr>
								<td>Time played last 2 weeks</td>
								<td>{$time_played_2weeks}</td>
								</tr>
								<tr>
								<td>total damage done</td>
								<td>{$total_damage_done}</td>
								</tr>
								<tr>
								<td>total kills</td>
								<td>{$total_kills}</td>
								</tr>
								<tr>
								<td>total deaths</td>
								<td>{$total_deaths}</td>
								</tr>
								<tr>
								<td>total money earned</td>
								<td>{$total_money_earned}</td>
								</tr>
								<tr>
								<td>total kills headshot</td>
								<td>{$total_kills_headshot}</td>
								</tr>
								<tr>
								<td>total shots hit</td>
								<td>{$total_shots_hit}</td>
								</tr>
								<tr>
								<td>total shots fired</td>
								<td>{$total_shots_fired}</td>
								</tr>
								<tr>
								<td>total kills awp</td>
								<td>{$total_kills_awp}</td>
								</tr>
								<tr>
								<td>total shots awp</td>
								<td>{$total_shots_awp}</td>
								</tr>
								<tr>
								<td>total hits awp</td>
								<td>{$total_hits_awp}</td>
								</tr>
								<tr>
								<td>total kills ak47</td>
								<td>{$total_kills_ak47}</td>
								</tr>
								<tr>
								<td>total shots ak47</td>
								<td>{$total_shots_ak47}</td>
								</tr>
								<tr>
								<td>total shots ak47</td>
								<td>{$total_hits_ak47}</td>
								</tr>
								<tr>
								<td>total kills glock</td>
								<td>{$total_kills_glock}</td>
								</tr>
								<tr>
								<td>total shots glock</td>
								<td>{$total_shots_glock}</td>
								</tr>
								<tr>
								<td>total hits glock</td>
								<td>{$total_hits_glock}</td>
								</tr>
								<tr>
								<td>total kills hkp2000</td>
								<td>{$total_kills_hkp2000}</td>
								</tr>
								<tr>
								<td>total shots hkp2000</td>
								<td>{$total_shots_hkp2000}</td>
								</tr>
								<tr>
								<td>total hits hkp2000</td>
								<td>{$total_hits_hkp2000}</td>
								</tr>
								<tr>
								<td>total kills ssg08</td>
								<td>{$total_kills_ssg08}</td>
								</tr>
								<tr>
								<td>total shots ssg08</td>
								<td>{$total_shots_ssg08}</td>
								</tr>
								<tr>
								<td>total hits ssg08</td>
								<td>{$total_hits_ssg08}</td>
								</tr>
								<tr>
								<td>total kills m4a1</td>
								<td>{$total_kills_m4a1}</td>
								</tr>
								<tr>
								<td>total shots m4a1</td>
								<td>{$total_shots_m4a1}</td>
								</tr>
								<tr>
								<td>total hits m4a1</td>
								<td>{$total_hits_m4a1}</td>
								</tr>
								";

							}
						}
						else{
							echo"ERROR";
						}
			    		$conn->close();
			    	}

function MoneyWellSpent(){
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
}
function KDRatio(){
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
}
function noLifers(){
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
		    		
}
function headhunters(){
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
}
function totalKills(){

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
		    		$conn->close();
}
function countUsersCS(){
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
}
function countUsers(){
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
}
function byFirstLetter(){
					//connect to the database
					require_once("database\database_connection.php");
					$conn=database();
					//Query the database
					$resultSet = $conn->query("SELECT * FROM by_first_letter_view");

					if($resultSet->num_rows != 0){
						while($rows = $resultSet->fetch_assoc()){
							$subs = $rows['substr'];
							$value = $rows['count'];

							echo "<tr>
							<td>$subs</td>
							<td>$value</td>
							</tr>";

						}
					}
					else{
						echo"ERROR";
					}
		    		$conn->close();
}
function usersWith(){
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
}
function usersWithout(){
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
}
?>
