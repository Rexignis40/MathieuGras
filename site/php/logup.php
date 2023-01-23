<?php
require "config.php";
$sql = "INSERT INTO user(name,email,age,password,num,adresse) VALUES(:name,:email,:age,:password,:num,:adresse)";
$dataBinded=array(
    ':name'   => $_POST['name'],
    ':password'=> sha1(sha1($_POST['password']."vdvfdgdf234567890°+£µ*%MPHBN?KOYGHBsgvdf788383fdvfdf4894891154bdfbdsvdfv")."4g8rez48v4rfbg56re4b5fd78hf5b4reh486fe4g8re8"),
    ':email'=> $_POST['email'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:aceuille.php');

?>