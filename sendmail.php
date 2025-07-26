<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@reyns.in";  // Change this to your email
    $subject = "New Contact Form Submission";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "You have received a new message:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        $message = "Your message has been sent successfully!";
    } else {
        $message = "Error sending message.";
    }
    header("Location: contact.php?msg=" . $message);
    exit();
}
