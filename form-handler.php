<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['messgae'];

$email_from = 'davidnaoh904@gmail.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
               "User Name: $visitor_email.\n".
               "subject: $subject.\n".
               "User Message: $message.\n";

$to = 'davidnoah904@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers );

header("loctaion: contact.html")

?>