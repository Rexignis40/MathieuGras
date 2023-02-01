<?php
require_once("config.php");
if(!isset($_POST["id"])){
    exit();
}

$q = $pdo->prepare("SELECT first_name, name, password, age, email, adresse, num FROM user WHERE id=:id");
$q->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
$q->execute();

if($q->rowCount() == 1){
    $user = $q->fetch();
    echo '<div class="you"><div class="nomPrenom"><p><input  type="text" id="FN" value ='.$user["first_name"].'></p><p><input type="text" id="N" value ='.$user["name"].'></p></div><p><input type="password" id="P" value ='.$user["password"].'></p><p><input type="mail" id="E" value ='.$user["email"].'></p><p><input type="number" id="age" value ='.$user["age"].'></p><p><input type="text" id="A" value ='.$user["adresse"].'></p><p><input type="tel" id="Nu" value ='.$user["num"].'></p><button onclick="SetUserInfo()">Appliquer les modification</button></div>';
}
?>
