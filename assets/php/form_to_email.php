<?php

if(!isset($_POST[submit]))
{
echo "error; you need to submit the form!";
}
$name = $POST['name'];
$visitor_email = $POST['email'];
$subject = $POST['subject'];
$message = $POST['message'];

if(empty($name) || empty($visitor_email))
{
echo "Name and Emai are mandatory!";
exit;
}

$email_from = 'martin.thoma@web.de';
$email_subject = "New form submission: $subject";
$email_body = "You have received a new message from the user $name. \n".
    "email adress: $visitor_email\n".
    "Here is the message: \n $message".

$to = "martin.thoma@web.de";
$headers = "From: $email_from \r\n";

mail($to, $email_subject, $email_body, $headers);

?>