<?php
// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set recipient email address
$to = 'larme-de-pierre64@hotmail.fr';

// Set email subject
$subject = 'New Contact Form Submission';

// Compose email message
$body = "Name: $name\n";
$body .= "Email: $email\n\n";
$body .= "Message:\n$message";

// Set headers
$headers = "From: $name <$email>";

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo "Email successfully sent!";
} else {
    echo "Email delivery failed. Please try again later.";
}
?>
