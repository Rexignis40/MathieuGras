<?php 
require "security.php";
require_once("config.php");
if(!isset($_POST["name"]) || !isset($_FILES['img']["tmp_name"]) || !isset($_POST["uid"])){
    $_SESSION["output"] = "Une erreur s'est produite";
    header("Location: ../user.php");
    exit;
}

$q = $pdo->prepare("INSERT image (name, id_user) VALUES (:name, :id_user)");
$q->bindParam(":name", $_POST["name"]);
$q->bindParam(":id_user", $_POST["uid"], PDO::PARAM_INT);
$q->execute();

$destination = "img/user/" . $pdo->lastInsertId() .".png";

if(!imagepng(imagecreatefromstring(file_get_contents($_FILES["img"]["tmp_name"])), "../".$destination, 9));

$_SESSION["output"] = "Photo envoyer";
header('Location: ../user.php');
?>