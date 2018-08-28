<?php
/**
 * This example shows making an SMTP connection with authentication.
 */
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require 'vendor/autoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
//Username to use for SMTP authentication
$mail->Username = '';
//Password to use for SMTP authentication
$mail->Password = '';
//Set who the message is to be sent from
$mail->setFrom('', 'Panadería Créer');
//Set an alternative reply-to address
$mail->addReplyTo('', 'Panadería Créer');
//Set who the message is to be sent to
$mail->addAddress('', 'Destinatario');
 // Set email format to HTML
$mail->isHTML(true);
$mail->Subject = 'PHPMailer SMTP test';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    header("Location: mail_error.php");
} else {
    header("Location: mail_sent.php");
}
