<?php 
require "../security.php";
require_once("../config.php");
if(!isset($_POST["name"]) || !isset($_POST["price"]) || !isset($_FILES['img']["tmp_name"]) || !isset($_POST["category"])){
    $_SESSION["output"] = "Une erreur s'est produite";
    header("Location: ../../page/user.php");
    exit;
}

$q = $pdo->prepare("INSERT image (price, name, category) VALUES (:price, :name, :category)");
$q->bindParam(":price", $_POST["price"], PDO::PARAM_INT);
$q->bindParam(":name", $_POST["name"]);
$q->bindParam(":category", $_POST["category"]);
$q->execute();

$destination = "img/store/" . $pdo->lastInsertId() .".png";

if(!imagepng(imagecreatefromstring(file_get_contents($_FILES["img"]["tmp_name"])), "../../".$destination, 9));

$_SESSION["output"] = "Photo upload";
header('Location: ../../user.php');
?>