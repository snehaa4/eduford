<?php 
$name = $_POST["name"]
$visitor_email = $_POST["email"]
$subject = $_POST["subject"]
$message = $_POST["message"]

$email_form = 'thakursnehalodhi@gmail.com';

$email_subject = 'new form submission';

$email_body = "user Name: $name.\n".
                "user Email: $visitor_email.\n".
                "subject: $subject.\n".
                "user message: $message.\n";

$to = "thakursnehalodhi@gmail.com";

$headers = "Form: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject, $email_body, $headers)

header("Location: contact.html");


?>