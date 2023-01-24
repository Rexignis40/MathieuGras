<?php
require_once "../config.php";
if($_SESSION['user']['admin'] == 0){
    header('Location:../../user.php');
    exit();
}
$sql = "UPDATE user SET name=:name WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':name'   => $_POST['name'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

$sql = "UPDATE user SET password=:password WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':password'   => $_POST['password'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

$sql = "UPDATE user SET email=:email WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':email'   => $_POST['email'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

$sql = "UPDATE user SET num=:num WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':num'   => $_POST['password'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

$sql = "UPDATE user SET age=:age WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':age'   => $_POST['age'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

$sql = "UPDATE user SET adresse=:adresse WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':adresse'   => $_POST['adresse'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);
header('location:../../user.php')
?>