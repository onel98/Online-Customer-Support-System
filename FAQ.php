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


	<section class="#"></section>
	<h2>Frequent Asked Questions</h2>
	<br>
	<div class="contact-us-flex-container">
	<img src="faq-left-image.jpg" class="faq-left-image" alt="faq left image">	
	<div id="FAQ-list">
		<?php

		$sql = "SELECT FAQ_no, Question, Answer, Customer_ID FROM FAQ";
		 $result =$con->query($sql);

		 if ($result->num_rows>0) {
		 	while ($row = $result->fetch_assoc()) {
		 		echo "<div class='faq-container'>";
		 		echo"<p>FAQ No: ". $row["FAQ_no"]."</p>";
		 		echo "<div class='faq-question'>";
		 		echo"<p>Question: ". $row["Question"]."</p>";
		 		echo "</div>";
		 		echo"<p>Answer: ". $row["Answer"]."</p>";
		 		echo "<br>";
		 		echo"<p>Customer ID: ". $row["Customer_ID"]."</p>";
		 		echo "<br>";
		 		echo "</div>";
		 	}
		 } else{
		 	echo "No frequesnt asked question found.";
		 }
		 $con->close();

	?>
		
	</div>
	<img src="faq-right-image.png" class="faq-right-image" alt="faq left image">
	</div>

	<hr>
	<div class="login-container">
	<h3>Submit your question: </h3>
	<form action="submit_question.php" method="POST">
		<label for="question">Question:</label>
		<textarea id= "faqQuestion"type="text" name="question" rows="4" cols="50"></textarea><br>
		<input type="submit" value="Submit">
	</form>
	</div>
	<br>

	
	
	<?php include "footer.php" ?>	
	
</body>

</html>