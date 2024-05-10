<!---D.O.J.Silva--->

<?php 

session_start();

require "config.php";


if (isset($_SESSION["email"])) {

		$userEmail = $_SESSION['email'];

		$stmt_admin = $con->prepare("SELECT * FROM administrator WHERE Email = ?");
		$stmt_admin->bind_param("s",$userEmail);
		$stmt_admin->execute();
		$stmt_admin->store_result();
		$adminExists = $stmt_admin->fetch();

		$stmt_customer = $con->prepare("SELECT * FROM registered_customer WHERE Email= ?");
		$stmt_customer->bind_param("s", $userEmail);
		$stmt_customer->execute();
		$stmt_customer->store_result();
		$customerExists = $stmt_customer->fetch();

		$stmt_customer_representative = $con->prepare("SELECT * FROM customer_representative WHERE Email= ?");
		$stmt_customer_representative->bind_param("s", $userEmail);
		$stmt_customer_representative->execute();
		$stmt_customer_representative->store_result();
		$customer_representative_Exists = $stmt_customer_representative->fetch();

		$stmt_customerExperienceManager = $con->prepare("SELECT * FROM customer_experience_manager WHERE Email= ?");
		$stmt_customerExperienceManager->bind_param("s", $userEmail);
		$stmt_customerExperienceManager->execute();
		$stmt_customerExperienceManager->store_result();
		$stmt_customerExperienceManager_Exists = $stmt_customerExperienceManager->fetch();

		
		if ($adminExists) {
			$dashboardLink = 'adminDashboard.php';
		}
		elseif ($customerExists) {
			$dashboardLink = 'Customer Dashboard.php';
		}
		elseif ($customer_representative_Exists) {
			$dashboardLink = 'Customer Representative.php';
		}
		elseif ($stmt_customerExperienceManager_Exists) {
			$dashboardLink = 'Customer Experience Manager.php';
		}
		else{
			header("Location: Customer Support System.php");
		}

        include "logged-in-header.php";

    } else {
    	
    	$dashboardLink = 'Customer Support System.php';

        include "logged-out-header.php";
        
    } 
?>