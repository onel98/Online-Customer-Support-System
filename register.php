<!---R.O.Peter--->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Customer Support System</title>
	<link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>
	<header>
		<img src="Main-logo.png" width="110" height="110">
		<nav class="header">
			<ul class="header">
				<li><a href="Login-page.php">Log in</a></li>
				<li><a href="register.php">Sign up</a></li>
			</ul>
			
		</nav>
	</header>	
		<nav class="nav">
			<ul class="nav">
				<li><a href="Customer Support System.php">Home</a></li>
				<li><a href="FAQ.php">FAQ</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="aboutus.php">About us</a></li>
				<li><a href="feedback-page.php">Feedback</a></li>
			</ul>
		</nav>


	<section class="#"></section>
	<h2>Welcome to Online Customer Support System</h2>
	<div class="login-container">
	<h2 id="Sign up">Sign Up</h2>
	<form action="store_form.php" method="POST">
		<input type="text" name="F_Name" placeholder="First Name" required><br>
		<input type="text" name="L_Name" placeholder="Last Name" required><br>
		<input type="text" name="House_no" placeholder="House No" required><br>
		<input type="text" name="Street" placeholder="Street" required><br>
		<input type="text" name="City" placeholder="City" required><br>
		<input type="text" name="Postal_code" placeholder="Postal Code" required><br>
		<input type="text" name="Country" placeholder="Country" required><br>
		<input type="Date" name="DOB" placeholder="Date of Birth" required><br>
		<input type="tel" name="Phone" pattern="[0-9]{10}" placeholder="Phone number format 0773423657" required>
		<input type="Email" name="Email" placeholder="Email" required><br>
		<input type="password" name="Password" placeholder="Password" required><br>
		<input type="password" name="Confirm password" placeholder="Confirm Password" required><br>
		<input type="Submit" value="Sign up">
	</form>
	</div>
	<?php include "footer.php" ?>	
	</body>

</html>