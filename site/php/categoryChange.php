<?php
$sql = "UPDATE user SET category=:category WHERE id=:id";
$dataBinded=array(
    ':id'   => $_POST['id'],
    ':category'   => $_POST['category'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);
?>