<?php
require "../config.php";
if(!isset($_POST["name"])){
    exit;
}
$pre = $pdo->prepare("INSERT INTO category(name) VALUES(:name)");
$pre->execute(array(
    ':name'   => $_POST['name']
));
header('Location: ../../user.php');
?>