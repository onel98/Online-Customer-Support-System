<?php

require_once "config.php";

$ticket_id = $_POST["ticket_id"];
$message = $_POST["text"];

$stmt = $con->prepare("INSERT INTO chat_history (Ticket_No, Message) VALUES (?,?)");
$stmt->bind_param("is", $ticket_id, $message);
$stmt-> execute();
$stmt-> close();
$con->close();

echo '<script>alert("Message sent successfully");</script>';

echo '<script>window.location.href=document.referrer;</script>';
?>