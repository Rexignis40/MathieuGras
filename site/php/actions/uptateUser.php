<?php
require_once "../config.php";

$sql = "UPDATE user SET first_name=:first_name,name=:name,password=:password,email=:email,num=:num,age=:age,adresse=:adresse WHERE id=:id";
$dataBinded=array(
    ':id'   => $_SESSION["user"]["id"],
    ':name'   => $_POST['Nom'],
    ':first_name'   => $_POST['Prénom'],
    ':password'   => sha1(sha1($_POST['Password'])),
    ':email'   => $_POST['Email'],
    ':num'   => $_POST['Num'],
    ':age'   => $_POST['Age'],
    ':adresse'   => $_POST['Adresse']
);

$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);  
header('location: ../../user.php');
?>