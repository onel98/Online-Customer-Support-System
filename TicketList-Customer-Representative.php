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

$stmt = $con->prepare("SELECT Ticket_No, Customer_ID, Description, ticketStatus, Created_at, Subject, Category FROM ticket");
$stmt->execute();
$stmt->bind_result($ticketNo,$customer_id,$description,$status, $createdat, $sub, $cat);

$tickets = array();

while($stmt->fetch()){
	$tickets[] = array("Ticket_No" => $ticketNo, "Customer_ID" => $customer_id, "Description" => $description, "Status" => $status, "Created_at" => $createdat, "Subject"=> $sub, "Category" => $cat);
}

$stmt->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online4 Customer Support System</title>
    <link rel="stylesheet" type="text/css" href="mycss.css">
    <script src="script.js"></script>
</head>
<body> 

        <nav class="nav">
            <ul class="nav">
                <li><a href="Customer Representative.php">Dashboard</a></li>
                
                <li class="dropdown" onmouseover="showDropdownContent()" onmouseout="hideDropdownContent()">
                <a href="TicketList-Customer-Representative.php" class="dropbtn">Ticket</a>
              
                <div class="dropdown-content" id="dropdownContent">
                
                <a href="TicketList-Customer-Representative.php">List</a>
            </div>
                </li>  
            
            </ul>
        </nav>
    <br>
    <h2>Opened Ticket List</h2>
    <br>
    <table>
    	<tr>
    		<th>Ticket No</th>
    		<th>Customer ID</th>
    		<th>Description</th>
    		<th>Status</th>
    		<th>Created at</th>
    		<th>Subject</th>
    		<th>Category</th>
            <th>Action</th>
    	</tr>
    	<?php foreach ($tickets as $ticket): ?>
    		<tr>
    			<td><?php echo $ticket['Ticket_No']; ?></td>
    			<td><?php echo $ticket['Customer_ID']; ?></td>
    			<td><?php echo $ticket['Description']; ?></td>
    			<td><?php echo $ticket['Status']; ?></td>
    			<td><?php echo $ticket['Created_at']; ?></td>
    			<td><?php echo $ticket['Subject']; ?></td>
    			<td><?php echo $ticket['Category']; ?></td>
                <td><a href= "deleteticket.php?tickid=<?php echo $ticket['Ticket_No']; ?>">Delete</a></td>
    		</tr>
    	<?php endforeach; ?>
    </table>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<?php include "footer.php" ?> 
</body>
</html>