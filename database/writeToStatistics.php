<?php
include("database_connection.php");
function writeToStatistics($steamID, $username, $avatar_small, $avatar_medium, $avatar_full, $profile_url) {
	$query = "SELECT * FROM statistics WHERE steamID = '{$steamID}'";
	$result = mysql_query($query)
	 if(mysql_num_rows($query) == 0)
    {
	 	$sql = "INSERT INTO statistics (steamID, username, avatar_small,avatar_medium, avatar_full, profile_url)
		VALUES ($steamID, $username, $avatar_small, $avatar_medium, $avatar_full, $profile_url)";

		if (mysqli_query($conn, $sql)) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	    }
    else
    {
    	$sql = "UPDATE user SET username='{$username}', avatar_small ='{$avatar_small', avatar_medium='{$avatar_medium}', avatar_full='{$avatar_full}'
    	 WHERE steamID='{$steamID}'";
		if (mysqli_query($conn, $sql)) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	    }

}
?>