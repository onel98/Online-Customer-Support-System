<?php

require "config.php";

if(isset($_GET['tickid'])) {

	$ticket_id = $_GET['tickid'];


	$stmt = $con->prepare("DELETE FROM ticket WHERE Ticket_No = ?");
	$stmt->bind_param("i", $ticket_id);

	if($stmt->execute()){

		header("Location: TicketList-Admin.php");
		exit();
	}
	else{
		echo "Error deleting ticket";
	}
	$stmt->close();
	$con->close();
} else{
	header("Location: TicketList-Admin.php");
}

?>