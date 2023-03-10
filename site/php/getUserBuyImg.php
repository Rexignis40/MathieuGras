<?php
require_once("config.php");
if(!isset($_SESSION["user"])){
    exit();
}

$q = $pdo->prepare("SELECT image.name, image.id FROM image INNER JOIN sell ON image.id = sell.img WHERE sell.user=:id");
$q->bindParam(":id", $_SESSION["user"]["id"], PDO::PARAM_INT);
$q->execute();
echo json_encode($q->fetchAll());
?>