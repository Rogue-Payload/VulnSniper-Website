<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Prepare email
        $to = "vulnsniper@globalbughunters.com";
        $subject = "VulnSniper Form Submission";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        
        // Email headers
        $headers = "From: no-reply@vulnsniper.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            echo "Message Sent Successfully!";
        } else {
            echo "Failed to send message. Please try again.";
        }
    } else {
        echo "Invalid email address.";
    }
}
?>
