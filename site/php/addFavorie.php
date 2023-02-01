<?php
require "config.php";
if(!isset($_SESSION["user"]) || !isset($_POST["img"])){
    exit();
}
$dataBinded=array(
':uid'   => $_SESSION["user"]['id'],
':id'=> $_POST['img']
);
$sql;

$condition = $pdo->prepare("SELECT * FROM favorie WHERE id_user=:uid && id_image=:id"); 
$condition->execute($dataBinded);
if($condition->rowCount() > 0 ){
    $sql = "DELETE FROM favorie WHERE id_user=:uid && id_image=:id";
} else {
    $sql = "INSERT INTO favorie(id_user,id_image) VALUES(:uid,:id)";
}
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location: ../store.php');
?>