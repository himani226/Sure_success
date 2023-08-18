<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "vichaar.team@gmail.com";  // Set the recipient's email address
    $subject = "Contact Us Form Submission";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $option = $_POST["option"];
    $message = $_POST["message"];

    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        header("Location: contact-us.html?status=success");
        exit();
    } else {
        header("Location: contact-us.html?status=error");
        exit();
    }
}
?>
