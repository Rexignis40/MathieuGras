<?php
require_once "config.php";
ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", "25");
$to = 'arno.labourdette40@gmail.com';
$message      = wordwrap($_POST["prénom"]." ".$_POST["nom"]."<br>".$_POST["Msg"]);
$object       = $_POST["obj"];
$headers = array(
    'From' => $_POST["email"],
    'Reply-To' => $_POST["email"],
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to,$object,$message,$headers);


?>