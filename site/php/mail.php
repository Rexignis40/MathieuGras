<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require_once "config.php";
require 'C:/wamp64/composer/vendor/autoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

//Set the SMTP port number:
// - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
// - 587 for SMTP+STARTTLS
$mail->Port = 465;

//Set the encryption mechanism to use:
// - SMTPS (implicit TLS on port 465) or
// - STARTTLS (explicit TLS on port 587)
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'arno.labourdette40@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'ajkbnbflnyhfqzzp';

//Set who the message is to be sent from
//Note that with gmail you can only use your account address (same as `Username`)
//or predefined aliases that you have configured within your account.
//Do not use user-submitted addresses in here
$mail->setFrom($_POST["email"], $_POST["name"] ." ". $_POST["family-name"]);

//Set who the message is to be sent to
$mail->addAddress('arno.labourdette40@gmail.com', 'Arno Labourdette');

//Set the subject line
$mail->Subject = $_POST["obj"];
$mail->msgHTML($_POST["prénom"]." ".$_POST["nom"]."<br>".$_POST["Msg"]);
//Replace the plain text body with one created manually
$mail->AltBody = $_POST["prénom"]." ".$_POST["nom"]."<br>".$_POST["Msg"];

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
?>