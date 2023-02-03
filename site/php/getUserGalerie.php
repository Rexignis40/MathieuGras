<?php
require_once("config.php");
if(!isset($_SESSION["user"])){
    exit();
}

$q = $pdo->prepare("SELECT name, id FROM image WHERE id_user=:id");
$q->bindParam(":id", $_SESSION["user"]["id"], PDO::PARAM_INT);
$q->execute();
echo json_encode($q->fetchAll());
?>