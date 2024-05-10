<!---R.O.Peter--->

<?php 

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
    

    <h2 align="left">Home</h2>
    <h4>Welcome, <?php echo $email; ?>!</h4>
    <hr><br>
    <center>
    <a href="Registered Customer List for admin.php">
    <button class="block">Total Customers</button> 
    <a href="StaffList.php">
    <button class="block">Total Staff</button> 
    <a href="TicketList-Admin.php">
    <button class="block">Total Tickets</button>
	</center>
    <br>    

    <br>
    <?php include "footer.php" ?>      
</body>
</html>
