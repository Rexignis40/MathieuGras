<?php
require_once "config.php";
$to = 'a.camandona@orange.fr';
$message      = wordwrap($_POST["prénom"]." ".$_POST["nom"]."<br>".$_POST["Msg"]);
$object       = $_POST["obj"];
$headers = array(
    'From' => $_POST["email"],
    'Reply-To' => $_POST["email"],
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to,$object,$message,$headers);


?>