<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$name=$_POST['comment'];

$email_from='eche19061@rgipt.ac.in';
$email_subject='New Form'

$email_body='User Name: $name.\n'.
'User Email: $visitor_email.\n'.
'User Message: $message.\n';

$to='sheoranvipin2910@gmail.com';

$headers='From: $email_from \r\n';
$headers .='Reply-To: $email_from \r\n';

mail($to,$email_subject,$email_body,$headers);
header('Location:index.html');
?>