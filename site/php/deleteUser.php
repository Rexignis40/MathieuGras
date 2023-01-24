<?php
include("security.php");
require_once("config.php");
if(!isset($_GET["u"])){
    $_SESSION["output"] = "Erreur utilisateurs non définie";
    header("Location: ../user.php");
    exit;
}

$q = $pdo->prepare("DELETE FROM user WHERE id=:id");
$q->bindParam(":id", $_GET["u"], PDO::PARAM_INT);
$q->execute();

$_SESSION["output"] = "Utilisateur supprimer";
header("Location: ../user.php");
?>