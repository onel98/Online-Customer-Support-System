<?php

require 'config.php';

session_start();

$customer_email = $_SESSION['email'];

$sql = "SELECT Customer_ID FROM registered_customer WHERE Email = '$customer_email'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $customer_id = $row["Customer_ID"];

    $rating = $_POST['rating'];
    $feedback_text = $_POST['opinion'];

    $insert_sql = "INSERT INTO feedback (Customer_ID, Feedback_text, Rating) VALUES ('$customer_id', '$feedback_text', '$rating')";

    if ($con->query($insert_sql) === TRUE) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $insert_sql . "<br>" . $con->error;
    }
    } else {
    echo "Customer not found.";
}
$con->close();
?>

