<?php
ini_set('SMTP', 'localhost');
ini_set('smtp_port', '1025'); // Use your local port
ini_set('sendmail_from', 'noreply@yourdomain.com');

// Your mail function logic
$to = "recipient@example.com";
$subject = "Test Message";
$message = "Hello World";
$headers = "From: sender@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Message sent successfully!";
} else {
    echo "Failed to send message.";
}
?>
