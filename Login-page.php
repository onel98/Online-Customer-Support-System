<!---DOJ Silva--->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online4 Customer Support System</title>
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
	<h2 id="login">Login</h2>

	<form action="login.php" method="POST">
		<input type="text" name="email" placeholder="Email" required><br>
		<input type="password" name="password" placeholder="Password" required><br>
		<input type="submit" value="Login">
	</form>
	</div>
	<?php include "footer.php" ?>	
	</body>

</html>