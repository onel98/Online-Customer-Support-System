<!---M.A.E.S.Munasinghe--->
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
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
	<h2>Feedbacks</h2>
	<br>
	<div class="contact-us-flex-container">
	<img src="feedback-left-image.png" alt="left image" class="feedback-left-image">
	<div id="FAQ-list">	
	<?php

		$sql = "SELECT Customer_ID, Feedback_text, Submission_date, Rating FROM feedback ORDER BY Submission_date DESC";
		 $result =$con->query($sql);

		 if ($result->num_rows>0) {
		 	while ($row = $result->fetch_assoc()) {
		 		echo "<div class='faq-container'>";
		 		echo"<p>Customer_ID: ". $row["Customer_ID"]."</p>";
		 		echo "<div class='faq-question'>";
		 		echo"<p>Feedback_text: ". $row["Feedback_text"]."</p>";
		 		echo "</div>";
		 		echo"<p>Submission_date: ". $row["Submission_date"]."</p>";
		 		echo "<p>Rating:<p>";

		 		for ($i=1; $i <= $row["Rating"] ; $i++) { 
		 			echo "<img src='star.png' alt='star'>";
		 		}
		 		echo "</p>";
		 		echo "<br>";
		 		echo "</div>";
		 	}
		 } else{
		 	echo "No feedback found.";
		 }
		 $con->close();

	?>
</div>
	<img src="feedback-right-image.png" alt="right image" class="feedback-right-image">
	</div>
	
	<div class="wrapper">

	<h3>Your Rating*</h3>
	<p>1 star for poor experience 5 star for a very good experiance </p>
	<form action="submit-feedback.php" method="POST">
		<div class="rating">
			<input type="number" name="rating" hidden>
			<i class='bx bx-star star' style="--i: 0;"></i>
				<i class='bx bx-star star' style="--i: 1;"></i>
				<i class='bx bx-star star' style="--i: 2;"></i>
				<i class='bx bx-star star' style="--i: 3;"></i>
				<i class='bx bx-star star' style="--i: 4;"></i>
		</div>
		<textarea name="opinion" cols="30" rows="5" placeholder="Please write a review only about your personal experience in our site "></textarea>
		<div class="btn-group">
			<button type="submit" class="btn submit">Submit</button>
		</div>
		</form>

	</div>

	<script src="feedback.js"></script>


	<?php include "footer.php" ?>

	
  
</body>

</html>