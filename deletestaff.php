<?php

require "config.php";

if(isset($_GET['rid'])) {

	$rid = $_GET['rid'];


	$stmt = $con->prepare("DELETE FROM customer_representative WHERE R_ID = ?");
	$stmt->bind_param("i", $rid);

	if($stmt->execute()){

		header("Location: StaffList.php");
		exit();
	}
	else{
		echo "Error deleting staff member";
	}
	$stmt->close();
	$con->close();
} else{
	header("Location: StaffList.php");
}

?>