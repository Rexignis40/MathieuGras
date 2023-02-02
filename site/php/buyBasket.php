<?php
require_once("config.php");
if(!isset($_SESSION["basket"]) || !isset($_SESSION["user"])){
    $_SESSION["output"] = "Erreur panier vide";
    exit;
}

foreach($_SESSION["basket"] as $elm){
    $q = $pdo->prepare("INSERT INTO sell (img, user, price) VALUES (:img, :user, :price)");
    $q->bindParam(":img", $elm["id"], PDO::PARAM_INT);
    $q->bindParam(":user", $_POST["user"]["id"], PDO::PARAM_INT);
    $q->bindParam(":price", $elm["price"], PDO::PARAM_INT);//calculer le prix avec plus de sécu
    $q->execute();
}
unset($_SESSION["basket"]);
header("Location: ../store.php");
?>