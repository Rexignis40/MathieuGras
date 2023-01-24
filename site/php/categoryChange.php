<?php
require "security.php";
require_once "config.php";

$sql = "UPDATE category SET name=:name WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':name'   => $_POST['name']
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);
header("Location: view/admin.php")
?>