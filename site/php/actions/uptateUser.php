<?php
require_once "../config.php";
if(!isset($_POST['first_name']) || !isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['age']) || !isset($_POST['num']) || !isset($_POST['adresse'])){
    exit();
}
$q = $pdo->prepare("UPDATE user SET first_name=:first_name,name=:name,email=:email,num=:num,age=:age,adresse=:adresse WHERE id=:id");
$q->bindParam(":id", $_SESSION["user"]["id"], PDO::PARAM_INT);
$q->bindParam(":name", $_POST['name']);
$q->bindParam(":first_name", $_POST['first_name']);
$q->bindParam(":email", $_POST['email']);
$q->bindParam(":num", $_POST['num'], PDO::PARAM_INT);
$q->bindParam(":age", $_POST['age'], PDO::PARAM_INT);
$q->bindParam(":adresse", $_POST['adresse']);
$q->execute();

$_SESSION["user"]["name"] = $_POST['name'];
$_SESSION["user"]["first_name"] = $_POST['first_name'];
$_SESSION["user"]["email"] = $_POST['email'];
$_SESSION["user"]["num"] = $_POST['num'];
$_SESSION["user"]["age"] = $_POST['age'];
$_SESSION["user"]["adresse"] = $_POST['adresse'];
?>