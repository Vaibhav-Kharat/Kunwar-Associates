<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "yourcompany@example.com"; // Your company's email address
    $subject = "Contact Form Submission";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your message has been sent successfully. We will get back to you soon.";
    } else {
        echo "Sorry, there was a problem sending your message. Please try again later.";
    }
}
?>
