<?php
require "config.php";

$sql = "INSERT INTO favorie(id_user,id_image) VALUES(:uid,:id)";
    $dataBinded=array(
    ':uid'   => $_POST['uid'],
    ':id'=> $_POST['img']
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    header('Location: ../store.php');
?>