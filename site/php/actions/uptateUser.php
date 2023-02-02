<?php
require_once "../config.php";
if(!isset($_POST['first_name']) || !isset($_POST['name']) || !isset($_POST['password']) || !isset($_POST['email']) || !isset($_POST['age']) || !isset($_POST['num']) || !isset($_POST['adresse'])){
    
    header('Location: ../user.php');
    exit();
}
$sql = "UPDATE user SET first_name=:first_name,name=:name,password=:password,email=:email,num=:num,age=:age,adresse=:adresse WHERE id=:id";
$dataBinded=array(
    ':id'   => $_SESSION["user"]["id"],
    ':name'   => $_POST['name'],
    ':first_name'   => $_POST['first_name'],
    ':password'   => sha1(md5($_POST['password'])),
    ':email'   => $_POST['email'],
    ':num'   => $_POST['num'],
    ':age'   => $_POST['age'],
    ':adresse'   => $_POST['adresse']
);

$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);  
header('location: ../../user.php');
?>