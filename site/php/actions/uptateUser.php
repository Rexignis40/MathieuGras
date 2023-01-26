<?php
require_once "../config.php";
if(!$_SESSION['user']['admin']){
    header('Location:../../user.php');
    exit();
}
$sql = "UPDATE user SET name=:name,password=:password,email=:email,num=:num,age=:age,adresse=:adresse WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':name'   => $_POST['name'],
    ':password'   => $_POST['password'],
    ':email'   => $_POST['email'],
    ':num'   => $_POST['num'],
    ':age'   => $_POST['age'],
    ':adresse'   => $_POST['adresse']
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);
header('location: ../../user.php');
$_SESSION["user"] = array(
    'id'   => $_POST['id'],
    'name'   => $_POST['name'],
    'password'   => $_POST['password'],
    'email'   => $_POST['email'],
    'num'   => $_POST['num'],
    'age'   => $_POST['age'],
    'adresse'   => $_POST['adresse'],
    'admin' => $_SESSION["user"]["admin"]
);
?>