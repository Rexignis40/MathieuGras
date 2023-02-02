<?php
require "security.php";
require_once "config.php";
if(!isset($_POST["id"]) || !isset($_POST["name"])){
    exit();
}
$sql = "UPDATE category SET name=:name WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':name'   => $_POST['name']
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);
header("Location: ../user.php");
?>
