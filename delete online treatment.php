<?php 
include "connection.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['T_id'])) {
	$T_id = $_GET['T_id'];

	// write delete query
	$sql = "DELETE FROM online_treatments WHERE T_id=$T_id";

	// Execute the query

	$result = $connection->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $connection->error;
	}
}

?>