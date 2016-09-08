<?php

$ownermail 	= 	'xinyao1@ualberta.ca';
$from 		= 	$_POST['email'];
$message 	= 	$_POST['message'];
$name		= 	$_POST['name'];
$subject 	= 	$name.' Sent a messgae from UA webdoc contact form';


mail($ownermail, $subject, $message, "From: $name <$from>\r\n");



// mail to sender

$to = $from;
$message = 'You just sent a email using UA webdoc Form, the mail on the way to destination';
$subject = 'Mail Sent confirmation';

mail($to, $subject, $message, "From: $name <$ownermail>\r\n");