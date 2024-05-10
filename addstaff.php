<!---DOJ Silva--->


<?php 

require "config.php";
session_start();

if (isset($_SESSION["email"])) {
        include "logged-in-header.php";
    } else {
        include "logged-out-header.php";
        header("Location: Login-page.php");
        exit();
    }

$email = $_SESSION["email"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Customer Support System</title>
    <link rel="stylesheet" type="text/css" href="mycss.css">
    <script src="script.js"></script>
</head>
<body>
    
        <nav>
            <div class="nav">
                <ul class="nav">
                    <li><a href="adminDashboard.php">Home</a></li>
                    
                    <div class="dropdown">
    						<button class="dropbtn">Staff 
      						<i class="fa fa-caret-down"></i>
    						</button>
    				<div class="dropdown-content">
      						
      						<a href="addstaff.php">Add staff</a>
      						<a href="StaffList.php">Staff list</a>
    				</div>
  					</div>
  					 
  			<div class="dropdown">
    			<button class="dropbtn">Ticket 
      				<i class="fa fa-caret-down"></i>
    			</button>
    				<div class="dropdown-content">
      						
      						<a href="TicketList-Admin.php">Ticket list</a>
    </div>
  </div> 
                </ul>
            </div>
        </nav>
    
    <h2 align="left">Add a Customer Representative</h2>
    <h4>Welcome, <?php echo $email; ?>!</h4>
    <hr><br>

    <div class="login-container">
	<h2 id="Sign up">Sign Up</h2>
	<form action="addStaffData.php" method="POST">
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