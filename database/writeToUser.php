<?php

function writeToUser($steamprofile) {
	$steamID = $steamprofile['steamid'];
	$username = $steamprofile['personaname'];
	$avatar_small = $steamprofile['avatar'];
	$avatar_medium = $steamprofile['avatarmedium'];
	$avatar_full = $steamprofile['avatarfull'];
	$profile_url = $steamprofile['profileurl'];
	require_once("database_connection.php");
	$conn=database();
	$query = "SELECT * FROM csgorankingsdata.user WHERE steamID = '{$steamID}'";
	$result = mysqli_query($conn ,$query) or die(mysqli_error($conn));

	 if(mysqli_num_rows($result) == 0){
	 	$sql = "INSERT INTO csgorankingsdata.user (steamID, username, avatar_small ,avatar_medium, avatar_full, profile_url)
		VALUES ('{$steamID}', '{$username}', '{$avatar_small}', '{$avatar_medium}', '{$avatar_full}', '{$profile_url}')";
		if (mysqli_query($conn, $sql)) {
    		echo "";
		}
		 else {
   		 echo "";/*Error adding record: " . mysqli_error($conn);*/
			}
	    }
    else{
    	$sql = "UPDATE user SET username='{$username}', avatar_small ='{$avatar_small}', avatar_medium='{$avatar_medium}', avatar_full='{$avatar_full}'
    	 WHERE steamID='{$steamID}'";
    	 if (mysqli_query($conn, $sql)) {
   			 echo "";
		}
		 else {
    		echo "Error updating record: " . mysqli_error($conn);
			}
    	}


mysqli_close($conn);

}
?>