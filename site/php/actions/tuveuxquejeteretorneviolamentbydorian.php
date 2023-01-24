<?php
require "../config.php";
$sql = "INSERT INTO category(name) VALUES(:name)";
$dataBinded=array(
    ':name'   => $_POST['name']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:../view/admin.php');
?>