<!---Evan_Munasinghe--->
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

$stmt = $con->prepare("SELECT Customer_ID FROM registered_customer WHERE Email='$email'");
$stmt->execute();
$stmt->bind_result($customer_id);
$stmt->fetch();
$stmt->close();

$stmt = $con-> prepare("SELECT Ticket_No, Subject FROM ticket WHERE Customer_ID= ?");
$stmt->bind_param("i",$customer_id);
$stmt->execute();
$stmt->bind_result($ticket_id,$subject);

$tickets = array();

while($stmt->fetch()){
  $tickets[] = array("id" => $ticket_id, "subject" => $subject);
}

$stmt->close();
$con->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<title>Online4 Customer Support System</title>
	<link rel="stylesheet" type="text/css" href="Customer Dashboard.css">
</head>
<body>
	
		<nav class="nav">
			<ul class="nav">
				<li><a href="Customer Dashboard.php">Home</a></li>
				<li><a href="Customer Dashboard.php">Tickets</a></li>
				<li><a href="feedback-page.php">Feedback</a></li>
				<li><a href="FAQ.php">FAQ</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="aboutus.php">About us</a></li>
			</ul>
		</nav>
  
    <div class="wrapper">
	
    <div class="newticket">
      <h2>Welcome</h2>
        <button type="button" class="newticketbuttn" onclick="openNewTicket()">
          <span class="material-symbols-outlined" id="btnlanguage">
            add
            </span>
        </button>
        <h4>Create New...</h4>
    </div>

    <div class="container" id="chat-container">

        <div class="container">
      <div class="nav-bar">
        <a>Chat</a>
        <div class="close" onclick="closeChatContainer()">
          <div class="line one"></div>
          <div class="line two"></div>
        </div>
      </div>
      <div class="messages-area">
        
        <div class="message one"></div>
        <div class="message two"></div>
        <div class="message three"></div>
        <div class="message four"></div>
        <div class="message five"></div>
        <div class="message six"></div>
      </div>
      <div class="sender-area">
        <form action="chathistory.php" method="POST">
        <div class="input-place">
          
          <input type="hidden" id="ticket-id" name="ticket_id">
          <input id="message-input" placeholder="Send a message." class="send-input" type="text" name="text">
          

            <button type="submit" class="send-icon" id="send-btn">



        <svg class="send-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path fill="#6B6C7B" d="M481.508,210.336L68.414,38.926c-17.403-7.222-37.064-4.045-51.309,8.287C2.86,59.547-3.098,78.551,1.558,96.808 L38.327,241h180.026c8.284,0,15.001,6.716,15.001,15.001c0,8.284-6.716,15.001-15.001,15.001H38.327L1.558,415.193 c-4.656,18.258,1.301,37.262,15.547,49.595c14.274,12.357,33.937,15.495,51.31,8.287l413.094-171.409 C500.317,293.862,512,276.364,512,256.001C512,235.638,500.317,218.139,481.508,210.336z"></path></g></g></svg>
      </button>
          </div>
        </div>
      </form>
      </div>
    <div></div></div>

    </div>
    <script type="text/javascript">
      function openChatContainer(ticket_id){
  var chatContainer = document.getElementById("chat-container");

  fetchChatHistory(ticket_id);

  chatContainer.style.display = "flex";

  document.getElementById("ticket-id").value = ticket_id;

}

    function closeChatContainer(){
      var chatContainer = document.getElementById("chat-container");

      chatContainer.style.display = "none";
    }
//AJAX 
function fetchChatHistory(ticketId) {
    
    fetch('DisplayChatHistory.php?ticket_id=' + ticketId)
        .then(response => response.text())
        .then(data => {
            
            document.querySelector('.messages-area').innerHTML = data;
        })
        .catch(error => {
            console.error('Error fetching chat history:', error);
        });
}

    

    </script>


    <div class="recent">
      <h2>Recent Tickets</h2>

      <div class="recentbttns">
        <?php foreach ($tickets as $ticket):   ?>
        <button type="button" class="recentbuttn" onclick="openChatContainer(<?php echo $ticket['id']; ?>)">
          <span class="material-symbols-outlined" id="btnlanguage">
            confirmation_number
            </span>
            <span class="recentbuttn__badge"></span>
        </button>
        <h4><?php echo $ticket['subject'];  ?></h4>
      <?php endforeach; ?>

      </div>

    </div>

  </div>

      <footer class="footer" >

    <div class="left-links" >
      <ul class="left-links">
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="contactus.php">Contact us</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="feedback-page.php">Feedback</a></li>
      </ul>
    </div>

    <div class="right-links">
      <ul class="right-links">
        <li><a href="#"><img src="fb-b-logo.png" alt="Facebook" height="auto" width="20px"></a></li>
        <li><a href="#"><img src="ig-b-logo.png" alt="Instagram" height="auto" width="20px"></a></li>
        <li><a href="#"><img src="x-b-logo.png" alt="Twitter" height="auto" width="20px"></a></li>
      </ul>
    </div>

  </footer>
	<script src="Customer Dashboard.js"></script>
  
</body>

</html>