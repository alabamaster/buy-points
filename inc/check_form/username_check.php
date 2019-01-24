<?php
if(isset($_POST['steamid']))
{
	// include Database connection file 
	include("db_connection.php");

	$steamid = mysqli_real_escape_string($con, $_POST['steamid']);

	$query = "SELECT name, auth_id FROM players WHERE name = '".$steamid."' OR auth_id = '".$steamid."'";
	if(!$result = mysqli_query($con, $query))
	{
		exit(mysqli_error($con));
	}

	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		// steamid is already exist 
		if ( $steamid == $row['auth_id'] ) {
			echo '<small id="steamid" class="form-text" style="color: darkgreen;"><b>'.$steamid.'</b> найден!</small>';
			echo '<small id="steamid" class="form-text" style="color: darkgreen;"><b>Ник '.$row['name'].'</b></small>';
		} elseif ( $steamid == $row['name'] ) {
			echo '<small id="steamid" class="form-text" style="color: darkgreen;"><b>'.$steamid.'</b> найден!</small>';
			echo '<small id="steamid" class="form-text" style="color: darkgreen;"><b>'.$row['auth_id'].'</b></small>';
		}
	}
	else
	{
		$row = mysqli_fetch_assoc($result);
		// steamid is avaialable to use.
		echo '<small id="steamid" class="form-text" style="color: brown;"><b>'.$steamid.'</b> не найден!</small>';
	}
}
?>