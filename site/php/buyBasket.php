<?php
require_once("config.php");
if(!isset($_POST["basket"]) || !isset($_POST["user"])){
    $_SESSION["output"] = "Erreur panier vide";
    exit;
}

foreach($_POST["basket"] as $elm){
    $q = $pdo->prepare("INSERT INTO sell (img, user, price) VALUES (:img, :user, :price)");
    $q->bindParam(":img", $elm["id"], PDO::PARAM_INT);
    $q->bindParam(":user", $_POST["user"], PDO::PARAM_INT);
    $q->bindParam(":price", $elm["price"], PDO::PARAM_INT);
    $q->execute();
}
unset($_SESSION["basket"]);
header("Location: ../store.php");
?>