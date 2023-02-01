<?php
require_once("config.php");
if(!isset($_POST["id"])){
    exit();
}

$q = $pdo->prepare("SELECT image.name AS name, image.id AS id FROM favorie INNER JOIN image ON image.id=favorie.id_image WHERE id_user=:id");
$q->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
$q->execute();
echo json_encode($q->fetchAll());
?>