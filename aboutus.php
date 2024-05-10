<!---DOJ Silva--->

<?php 

require "config.php";

require "Dynamic Navigation Bar.php"

?>

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



		<nav class="nav">
			<ul class="nav">
					<li><a href="<?php echo $dashboardLink; ?>">Home</a></li>
					<li><a href="FAQ.php">FAQ</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
					<li><a href="aboutus.php">About us</a></li>
					<li><a href="feedback-page.php">Feedback</a></li>
			</ul>
		</nav>

	<div class="about-section">
		<h2>About Us Page</h2>
		<p>Group of first year second semester undergraduates at Sri Lanka Institute of Information Technology</p>
	</div>
	<h2 style="text-align: center;">Our Team</h2>
	<div class="row">
		<div class="column">
			<div class="card">
		<img src="noprofile.png" alt="Onel" style="width: 100%; height: 80%;">
		<div class="about-container">
			<h3>Onel</h3>
			<p>dononelsilva9816@gmail.com</p>
			<p><button class="button">Contact</button></p>
		</div>
		</div>
    	</div>
    	<div class="column">
			<div class="card">
		<img src="noprofile.png" alt="Onel" style="width: 100%; height: 80%;">
		<div class="about-container">
			<h3>Rehan</h3>
			<p>omindupeter@gmail.com</p>
			<p><button class="button">Contact</button></p>
		</div>
		</div>
    	</div>
    	<div class="column">
			<div class="card">
		<img src="noprofile.png" alt="Onel" style="width: 100%">
		<div class="about-container">
			<h3>Evan</h3>
			<p>esmunasinghe@gmail.com</p>
			<p><button class="button">Contact</button></p>
		</div>
		</div>
    	</div>
    	<div class="column">
			<div class="card">
		<img src="noprofile.png" alt="Onel" style="width: 100%">
		<div class="about-container">
			<h3>Aanuka</h3>
			<p>anukatkd@gmail.com</p>
			<p><button class="button">Contact</button></p>
		</div>
		</div>
    	</div>
 	</div>
	
	<?php include "footer.php" ?>	
	
</body>

</html>