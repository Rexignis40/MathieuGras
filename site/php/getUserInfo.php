<?php
require_once("config.php");
if(!isset($_SESSION["user"])){
    exit();
}

$q = $pdo->prepare("SELECT first_name, name, password, age, email, adresse, num FROM user WHERE id=:id");
$q->bindParam(":id", $_SESSION["user"]["id"], PDO::PARAM_INT);
$q->execute();

if($q->rowCount() == 1){
    $user = $q->fetch();
    echo '<div class="userInfo"><div class="nameFirstName"><p>Prénom :<input class="entourage" type="text" id="FN" value ='.$user["first_name"].'></p><p>Nom :<input class="entourage" type="text" id="N" value ='.$user["name"].'></p></div><div class="userInfoOneLine"><p>Password :<input class="entourage" type="password" id="P" value ='.$user["password"].'></p><p>Email :<input class="entourage" type="email" id="E" value ='.$user["email"].'></p><p>Age :<input class="entourage" class="entourage" type="number" id="age" value ='.$user["age"].'></p><p>Adresse :<input class="entourage" type="text" id="A" value ='.$user["adresse"].'></p><p>Num :<input class="entourage" type="tel" id="Nu" value ='.$user["num"].'><button class="formSubmit" onclick="SetUserInfo()">Enregistrer</button></div></div>';
}
?>
