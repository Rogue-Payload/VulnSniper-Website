<?php
// process_form.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $package = filter_input(INPUT_POST, 'package', FILTER_SANITIZE_STRING);

    if ($name && $email && $package) {
        // Save to DB or send email (omitted for brevity)
        echo "Thank you for pre-purchasing the $package package, $name! We will contact you soon.";
    } else {
        echo "Invalid input. Please check your details.";
    }
} else {
    echo "Invalid request.";
}
?>
