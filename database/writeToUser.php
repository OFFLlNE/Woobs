<?php

function writeToUser($steamprofile) {
	$steamID = $steamprofile['steam_steamid'];
	$username = $steamprofile['steam_personaname'];
	$avatar_small = $steamprofile['steam_avatar'];
	$avatar_medium = $steamprofile['steam_avatarmedium'];
	$avatar_full = $steamprofile['steam_avatarfull'];
	$profile_url = $steamprofile['steam_profileurl'];
	include("database_connection.php");
	$conn=database();
	$query = "SELECT * FROM csgorankingsdata.user WHERE steamID = '{$steamID}'";
	$result = mysqli_query($conn ,$query) or die(mysqli_error($conn));
	echo "siin";
	 if(mysqli_num_rows($result) == 0){
	 	$sql = "INSERT INTO csgorankingsdata.user (steamID, username, avatar_small ,avatar_medium, avatar_full, profile_url)
		VALUES ('{$steamID}', '{$username}', '{$avatar_small}', '{$avatar_medium}', '{$avatar_full}', '{$profile_url}')";

		if (mysqli_query($conn, $sql)) {
    		echo "";
		}
		 else {
   		 echo "Error adding record: " . mysqli_error($conn);
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