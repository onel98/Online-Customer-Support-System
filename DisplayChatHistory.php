<?php

require_once "config.php";


if(isset($_GET['ticket_id'])) {
    
    $ticket_id = $_GET['ticket_id'];

    
    $stmt = $con->prepare("SELECT Message FROM chat_history WHERE Ticket_No = ?");
    $stmt->bind_param("i", $ticket_id);
    $stmt->execute();
    $result = $stmt->get_result();

    
    $chat_history = array();

    
    while ($row = $result->fetch_assoc()) {
        $chat_history[] = $row['Message'];
    }

    
    $stmt->close();

    
    $con->close();

    
    foreach ($chat_history as $message) {
        echo "<div class='message one'>$message</div>";
    }
} else {
    
    echo "Ticket ID not provided.";
}
?>