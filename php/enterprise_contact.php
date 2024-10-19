<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and gather form data
    $company_name = htmlspecialchars($_POST['company_name']);
    $full_name = htmlspecialchars($_POST['full_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $location = htmlspecialchars($_POST['location']);
    $website = htmlspecialchars($_POST['website']);
    $security_setup = htmlspecialchars($_POST['security_setup']);
    
    // Set up the email
    $to = "info@globalbughunters.com";
    $subject = "VulnSniper Inquiry from $company_name";

    $body = "
    Company Name: $company_name\n
    Full Name: $full_name\n
    Phone: $phone\n
    Email: $email\n
    Location: $location\n
    Website: $website\n
    Current Security Setup: $security_setup\n
    ";

    // Headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to a thank you page or show success message
        echo "<script>alert('Your inquiry has been submitted. We will contact you shortly.'); window.location.href = '/';</script>";
    } else {
        // Show error message
        echo "<script>alert('There was an error sending your message. Please try again.'); window.history.back();</script>";
    }
}
?>
