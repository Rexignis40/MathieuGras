<?php
require_once("config.php");
if(!isset($_POST["id"])){
    exit();
}

$q = $pdo->prepare("SELECT name, id FROM image WHERE id_user=:id");
$q->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
$q->execute();
echo json_encode($q->fetchAll());
?>