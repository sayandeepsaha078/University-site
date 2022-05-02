<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['text'];
$email_from = 'info@poulamiweb.org';
$email_subject = 'new form submission';
$email_body = "user name: $name.\n". 
"user email: $visitor_email.\n". 
"subject: $subject.\n". 
"user message: $message.\n";
$to = 'poulami.kv@gmail.com';
$headers = "from: $email_from \r\n";
$headers = "reply_to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");

            
?>