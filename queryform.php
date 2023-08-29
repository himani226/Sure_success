<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "vichaar.team@gmail.com";  // Set the recipient's email address
    $subject = "Contact Us Form Submission";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $enquiry = $_POST["enquiry"];
    $phone = $_POST["phone"];
    $country = $_POST["country"];
    $ilets = $_POST["ilets"];
    $refusal = $_POST["refusal"];




    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $email, $phone, $enquiry, $country, $ilets, $refusal, $headers)) {
        header("Location: query.html?status=success");
        exit();
    } else {
        header("Location: query.html?status=error");
        exit();
    }
}
?>
