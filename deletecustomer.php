<?php

require "config.php";

if(isset($_GET['cid'])) {

	$cid = $_GET['cid'];


	$stmt = $con->prepare("DELETE FROM registered_customer WHERE Customer_ID = ?");
	$stmt->bind_param("i", $cid);

	if($stmt->execute()){

		header("Location: Registered Customer List for admin.php");
		exit();
	}
	else{
		echo "Error deleting ticket";
	}
	$stmt->close();
	$con->close();
} else{
	header("Location: Registered Customer List for admin.php");
}

?>