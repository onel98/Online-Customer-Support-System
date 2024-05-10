<!---DOJ Silva--->


<?php

require 'config.php';

	$F_name = $_POST["F_Name"];
	$L_name = $_POST["L_Name"];
	$House_no = $_POST["House_no"];
	$Street = $_POST["Street"];
	$City = $_POST["City"];
	$Postal_code = $_POST["Postal_code"];
	$DOB = $_POST["DOB"];
	$Email = $_POST["Email"];
	$Password = $_POST["Password"];
	$Country = $_POST["Country"];
	$Phone = $_POST["Phone"];

	

	$sql_insert_customer = "INSERT INTO registered_customer ( F_name, L_name, House_no, Street, City, Postal_code, Country, DOB, Email, Password) VALUES ('$F_name','$L_name','$House_no','$Street','$City','$Postal_code','$Country','$DOB','$Email','$Password')";

	if ($con-> query($sql_insert_customer) === TRUE){

		$customer_id = $con->insert_id;
		
		$sql_insert_phone = "INSERT INTO registered_customer_phone (Customer_ID, Phone_no) VALUES ('$customer_id','$Phone')"; 

		if ($con->query($sql_insert_phone)==TRUE) {
				echo '<script>alert("Registered successfully!");</script>';
				echo '<script>window.location.href=document.referrer;</script>';
			}	
		else{
			echo "Error: ". $sql_insert_phone . "<br>" . $con->error;
		}	
	}
	else {
		echo "Error: " . $sql_insert_customer . "<br>" . $conn->error;
	}

	$con->close();

?>