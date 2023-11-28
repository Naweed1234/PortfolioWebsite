<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "naweedyarzada@gmail.com";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Redirect after sending email
    header("Location: index.html#contact?success=true");
} else {
    // Redirect if the form is not submitted
    header("Location: index.html#contact?success=false");
}
?>