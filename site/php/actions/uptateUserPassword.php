<?php
require_once "../config.php";

$pre = $pdo->prepare("SELECT id FROM user WHERE id=:id AND password=:password");
$pre->bindParam(":id", $_SESSION["user"]["id"], PDO::PARAM_INT);
$pre->bindValue(":password", sha1(md5($_POST["Old_password"]."vdvfdgdf234567890°+£µ*%MPHBN?KOYGHBsgvdf788383fdvfdf4894891154bdfbdsvdfv")."4g8rez48v4rfbg56re4b5fd78hf5b4reh486fe4g8re8"));
$pre->execute();
if($pre->rowCount() != 1){
    echo($pre->rowCount());
    exit();
};
$sql = "UPDATE user SET password=:password WHERE id=:id";
$dataBinded=array(
    ':id'   => $_SESSION["user"]["id"],
    ':password'   => sha1(md5($_POST['New_password']."vdvfdgdf234567890°+£µ*%MPHBN?KOYGHBsgvdf788383fdvfdf4894891154bdfbdsvdfv")."4g8rez48v4rfbg56re4b5fd78hf5b4reh486fe4g8re8")
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded); 
header('location: ../../user.php');
?>