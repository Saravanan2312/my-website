<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Recipient email
    $to = '18g022msaravanan@mail.com';
    
    // Email subject
    $subject = 'New Contact Form Submission';

    // Email content
    $body = "You have received a new message from your website contact form:\n\n".
            "Email: $email\n".
            "Phone: $phone\n".
            "Message: $message";

    // Email headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "There was a problem sending your message.";
    }
}
?>
