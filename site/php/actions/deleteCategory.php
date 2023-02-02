<?php
require "../security.php";
require_once "../config.php";

if(!isset($_POST["id"])){
    $_SESSION["output"] = "Erreur catégorie non définie";
    header("Location: ../user.php");
    exit;
}

$q = $pdo->prepare("DELETE FROM category WHERE id=:id");
$q->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
$q->execute();

$_SESSION["output"] = "Category supprimer";
header("Location: ../../user.php");
?>