<?php 
require "../security.php";
require_once("../config.php");
if(!isset($_POST["name"]) || !isset($_POST["price"]) || !isset($_FILES['img']["tmp_name"])){
    $_SESSION["output"] = "Une erreur s'est produite";
    header("Location: ../../page/user.php");
    exit;
}

$q = $pdo->prepare("INSERT image (price, name) VALUES (:price, :name)");
$q->bindParam(":price", $_POST["price"], PDO::PARAM_INT);
$q->bindParam(":name", $_POST["name"]);
$q->execute();

$destination = "img/store/" . $pdo->lastInsertId() .".png";

if(!imagepng(imagecreatefromstring(file_get_contents($_FILES["img"]["tmp_name"])), "../../".$destination, 9));

$_SESSION["output"] = "Photo upload";
header('Location: ../../user.php');
?>