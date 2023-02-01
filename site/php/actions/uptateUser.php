<?php
require_once "../config.php";

$sql = "UPDATE user SET first_name=:first_name,name=:name,password=:password,email=:email,num=:num,age=:age,adresse=:adresse WHERE id=:id";
$dataBinded=array(
    ':id'   => $_SESSION["user"]["id"],
    ':name'   => $_POST['Nom'],
    ':first_name'   => $_POST['Prénom'],
    ':password'   => sha1(sha1($_POST['Password']."vdvfdgdf234567890°+£µ*%MPHBN?KOYGHBsgvdf788383fdvfdf4894891154bdfbdsvdfv")."4g8rez48v4rfbg56re4b5fd78hf5b4reh486fe4g8re8"),
    ':email'   => $_POST['Email'],
    ':num'   => $_POST['Num'],
    ':age'   => $_POST['Age'],
    ':adresse'   => $_POST['Adresse']
);

$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);  
header('location: ../../user.php');
?>