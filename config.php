<?php

$con=new mysqli("localhost","onel","onel9816","ocss");

	if($con->connect_error){
		die("Connection failed: ". $con->connect_error);
	}
?>	