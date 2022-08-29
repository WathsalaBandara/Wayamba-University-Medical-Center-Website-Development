<?php 
include "connection.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['Recipt_No'])) {
	$R_id = $_GET['Recipt_No'];

	// write delete query
	$sql = "DELETE FROM medical_recipt WHERE Recipt_No=$R_id";

	// Execute the query

	$result = $connection->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $connection->error;
	}
}

?>