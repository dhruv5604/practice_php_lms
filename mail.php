<?php
$to = "21itusf129@ddu.ac.in";
$subject = "Hello from MailHog!";
$message = "This is a test email sent using MailHog + PHP.";
$headers = "From: dhruvsolanki5604@gmail.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Mail sent successfully!";
} else {
    echo "Mail failed.";
}
?>
