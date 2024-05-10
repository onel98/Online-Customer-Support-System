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
		<div class="contact-us-flex-container">
			<img src="left-image-contactus.jpg" alt="left image" class="left-image">
					<div class="login-container">
					<h4 align="center">We'd Love To Hear From You!</h4><br>
					<div align="center">Contact Us</div><br><br>
					<div align="center">Email: example@gmail.com </div><br><br>
					<div align="center">Mobile: +94 778372837/ +94 779372937</div> <br><br>
					<div align="center">Contact us through social media</div><br><br>
			
        			<div align="center"><a href="https://www.facebook.com/"><img src="fb-b-logo.png" alt="Facebook" height="auto" width="20px"></a>
       				<a href="https://www.instagram.com/"><img src="ig-b-logo.png" alt="ig-b-logo.png" height="auto" width="20px"></a>
        			<a href="https://twitter.com/"><img src="x-b-logo.png" alt="x-b-logo.png" height="auto" width="20px"></a></div><br><br>

        			<div align="center">Have a question? Try our frequently asked question page.</div> <br>

        			<div align="center"><a href="FAQ.php" class="faq-button">FAQ</a></div>


      	
					</div>
			<img src="right-image-contactus.jpg" alt="right image" class="right-image">		

		</div>


	</p>

	<?php include "footer.php" ?>	
	
</body>

</html>