<?php

require "config.php";

$customerID = null;


session_start();

if(isset($_SESSION['email'])){

	$email = $_SESSION['email'];

	$query = "SELECT Customer_ID FROM registered_customer WHERE Email=?";

	$stmt = $con->prepare($query);
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$stmt->bind_result($customerID);
	$stmt->fetch();
	$stmt->close();
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$questiontext = $_POST['question'];


	if(isset($customerID)){
		$sql = "INSERT INTO FAQ (Question, Customer_ID) VALUES (?,?)";
		$result=$con->prepare($sql);
		$result->bind_param("is",$customerID,$questiontext);
	} else{
		$sql = "INSERT INTO FAQ (Question) VALUES (?)";

	$result = $con->prepare($sql);
	$result->bind_param("s",$questiontext);
	}

	if($result->execute() === TRUE){
		echo '<script>alert("Question Submitted successfully!");</script>';
		echo '<script>window.location.href=document.referrer;</script>';
	}	
	else {
		echo "Error: " . $sql . "<br>". $conn->error;
	}
	$result->close();
	
}
$con->close();

?>