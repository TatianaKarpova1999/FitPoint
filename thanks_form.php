<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = $_POST["email"];
$privacy = $_POST["privacy"];
$name = $_POST["name"];


$to = "support@" . $_SERVER['HTTP_HOST'];
$subject = "New Contact Form Submission";

$body .= "Email: $email\n";
$body .= "Privacy:\n$privacy";
$body .= "Name: $name\n";


$headers = "From: $to \r\n";

mail($to, $subject, $body, $headers);
header("Location: thanks.html");
exit();
}
?>