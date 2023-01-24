<?php
require "security.php";
require_once "config.php";

$sql = "UPDATE category SET name=:name WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':name'   => $_POST['name']
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);


if(!isset($_GET["c"])){
    $_SESSION["output"] = "Erreur utilisateurs non définie";
    header("Location: ../user.php");
    exit;
}

$q = $pdo->prepare("DELETE FROM category WHERE id=:id");
$q->bindParam(":id", $_GET["c"], PDO::PARAM_INT);
$q->execute();

$_SESSION["output"] = "Category supprimer";
header("Location: view/admin.php");
?>
