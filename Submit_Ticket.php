<?php

require "config.php";

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){

	$email = $_SESSION['email'];

	$stmt = $con->prepare("SELECT Customer_ID FROM registered_customer WHERE Email = ? ");
	$stmt->bind_param("s",$email);

	$stmt->execute();

	$stmt->bind_result($customer_id);

	$stmt->fetch();

	$stmt->close();


	$subject = $_POST['subject'];
	$category = $_POST['category'];
	$message = $_POST['massage'];

	$targetDir = "C:\xampp\htdocs\IWT\uploads";
	$targetFile = $targetDir . basename($_FILES["attachment"]["name"]);

	if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFile)) {
		$attachment = $targetFile;
	} else{
		$attachment = null;
	}

	$sql = "INSERT INTO ticket (Customer_ID,Subject, Category, Description,Attachment) VALUES (?,?,?,?,?)";
	$stmt = $con->prepare($sql);
	$stmt->bind_param("issss",$customer_id ,$subject, $category, $message, $attachment);

	if ($stmt->execute()==TRUE) {
		echo '<script>alert("Ticket submitted successfully!");</script>';
		echo '<script>window.location.href=document.referrer;</script>';
	}
	else{
		echo "Error: ". $sql . "<br>". $con->error;
	}
	$stmt->close();
	$con->close();


}  else{
	header("Location: Login-page.php");
	exit();
}


?>