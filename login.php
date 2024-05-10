<!---DOJ Silva--->

<?php 

require "config.php";

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$email = $_POST["email"];
	$password = $_POST["password"];


	$customer_query = "SELECT * FROM registered_customer WHERE Email='$email' AND Password='$password'";

	$customer_result = $con->query($customer_query);

	$admin_query = "SELECT * FROM administrator WHERE Email='$email' AND Password='$password'";

	$admin_result = $con->query($admin_query);

	$customer_representative_query = "SELECT * FROM customer_representative WHERE Email='$email' AND Password='$password'";

	$customer_representative_result = $con->query($customer_representative_query);

	$customerExperienceManager_query = "SELECT * FROM customer_experience_manager WHERE Email='$email' AND Password='$password'";

	$customerExperienceManager_result = $con->query($customerExperienceManager_query); 

	if ($customer_result->num_rows >= 1) {
		
					$_SESSION['email'] = $email;

					header("Location: Customer Dashboard.php");
			} 
	elseif ($admin_result->num_rows >=1) {

				$_SESSION['email'] = $email;

				header("Location: adminDashboard.php");
			}	
	elseif ($customer_representative_result->num_rows >=1) {

				$_SESSION['email'] = $email;

				header("Location: Customer Representative.php");
			}
	elseif ($customerExperienceManager_result->num_rows >=1) {

				$_SESSION['email'] = $email;

				header("Location: Customer Experience Manager.php");
			}										
	else{
				$_SESSION['error'] = "Invalid email or password";
    			header("Location: Login-page.php");
			}

	$con->close();
}
?>

















