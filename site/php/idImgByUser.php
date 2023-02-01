<?php
require_once "config.php";

$q = $pdo->prepare("SELECT id_image FROM favorie WHERE :id=id_user");
$q->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
$q->execute();


?>