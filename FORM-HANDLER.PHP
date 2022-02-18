<?php
$name=$_POST['name'];
$visitor_Email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@eldoretuniversity.com';
$email_subject='new form submission';
$email_body="user name:$name.\n".
"user email:$visitor_email.\n".
"subject:$subject.\n".
"user message:$message.\n";


$to= 'hussainafran777@gmail.com';
$headers="from:$email_from\r\n";
$headers .="replay-to:visitor_email\r\n";

$to='hussainafran777@gmai.com';
$headers="from:$email_from\r\n";
$headers="replay-to:visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
header("location:contact.html");
?>

