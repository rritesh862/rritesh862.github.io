<?php

if(!isset($_POST['submit']))
{
    echo "error; you need to submit the form";
}

  $name = $_POST['name'];
  $visitor_phonenumber = $_POST['phonenumber'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  if(empty($name)||empty($visitor_phonenumber)||empty($visitor_email)) {
    echo "Name, Phone Number and email are mandatory!";
    exit;
}

$email_from = 'rritesh862@gmail.com';
$email_subject = "New Enquiry Form Submission";
$email_body = "You have received a new message from the user $name.\n".
              "Phone Number: $visitor_phonenumber\n".
              "email: $visitor_email\n".
              "subject: $subject\n".
              "message:\n $message".

$to = "rritesh862@gmail.com";
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

echo "Thank you, your message has been sent!";

?>
