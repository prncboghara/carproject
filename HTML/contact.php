<?php

//Write Your mail here
$admin_mail = 'thesoftking@gmail.com';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers  = "From: $name < $email >\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Priority: 1\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\n";

mail($admin_mail, 'Mail Received', $message, $headers);
