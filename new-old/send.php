<?php

$to = $_POST['to'];
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$body = "$message";
$body = preg_replace('/\\\\/','', $body); //Strip backslashes
	
	
$headers = 'From: ' . strip_tags($_POST['from']) . "\r\n";
$headers .= 'MIME-Version: 1.0' ."\r\n";
$headers .= 'Content-Type: text/html; charset=utf-8' . "\r\n";


mail($to,$subject,$body,$headers);

echo "Message Sent!";

?>