<?php
require "config.php";
$dataBinded=array(
':uid'   => $_POST['uid'],
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