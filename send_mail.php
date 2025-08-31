<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "julimon1314@gmail.com"; // Tu correo
    $subject = "New Contact from AZM Landscaping Website";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}
?>
