<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" From: $name \n message: $message \n ";
$recipient = "kajalthedodo@gmail.com";
$subject = "KAJAL CONTACT";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='http://kajaltaneja.net/' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>