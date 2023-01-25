<?php
require "config.php";

$sql = "INSERT INTO favorie(id_user,id_image) VALUES(:uid,:id)";
    $dataBinded=array(
    ':uid'   => $_POST['id_user'],
    ':id'=> $_POST['id_image']
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    header('Location: ../store.php');
?>