<?php
include("security.php");
require_once("config.php");
if(!isset($_GET["u"]) || !isset($_GET["v"])){
    $_SESSION["output"] = "Erreur utilisateurs non définie";
    header("Location: ../user.php");
    exit;
}

$q = $pdo->prepare("UPDATE user SET admin=:admin WHERE id=:id");
$q->bindParam(":admin", $_GET["v"], PDO::PARAM_BOOL);
$q->bindParam(":id", $_GET["u"], PDO::PARAM_INT);
$q->execute();

header("Location: ../user.php");
?>