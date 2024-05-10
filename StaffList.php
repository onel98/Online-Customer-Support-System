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

$stmt = $con->prepare("SELECT R_ID, F_name, L_name, Country, Email FROM customer_representative");
$stmt->execute();
$stmt->bind_result($rid,$fname,$lname,$country, $email);

$reps = array();

while($stmt->fetch()){
  $reps[] = array("R_ID" => $rid, "F_name" => $fname, "L_name" => $lname, "Country" => $country, "Email" => $email );
}

$stmt->close();
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
    
    <h2 align="left">Customer Representative List</h2>
    <h4>Welcome, <?php echo $email; ?>!</h4>
    <hr><br>
    <table>
      <tr>
        <th>Representative ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Country</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
      <?php foreach ($reps as $rep): ?>
        <tr>
          <td><?php echo $rep['R_ID']; ?></td>
          <td><?php echo $rep['F_name']; ?></td>
          <td><?php echo $rep['L_name']; ?></td>
          <td><?php echo $rep['Country']; ?></td>
          <td><?php echo $rep['Email']; ?></td>
          <td><a href= "deletestaff.php?rid=<?php echo $rep['R_ID']; ?>">Delete</a></td>
        </tr>
      <?php endforeach; ?>
    </table>


    <br>    
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php include "footer.php" ?>      
</body>
</html>