<?php

// Replace with your real receiving email address
$to = 'ebenezer@yeyanney.com';

// Check if form data has been submitted
if (isset($_POST['submit'])) {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Set headers for the email
  $headers = 'From: '. $name . ' <' . $email . '>' . "\r\n";

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    echo 'Message sent successfully';
  } else {
    echo 'Error: message not sent';
  }
}

?>
