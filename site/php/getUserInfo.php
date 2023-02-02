<?php
require_once("config.php");
if(!isset($_SESSION["user"])){
    exit();
}

 echo '<div class="you"><div class="nomPrenom"><p>Prénom :<input class="entourage" type="text" id="FN" value ='.$_SESSION["user"]["first_name"].'></p><p>Nom :<input class="entourage" type="text" id="N" value ='.$_SESSION["user"]["name"].'></p></div><p>Email :<input class="entourage" type="email" id="E" value ='.$_SESSION["user"]["email"].'></p><p>Age :<input class="entourage" class="entourage" type="number" id="age" value ='.$_SESSION["user"]["age"].'></p><p>Adresse :<input class="entourage" type="text" id="A" value ='.$_SESSION["user"]["adresse"].'></p><p>Num :<input class="entourage" type="tel" id="Nu" value ='.$_SESSION["user"]["num"].'><div class="centerpls"></p><button class="butonuse" onclick="SetUserInfo()">Enregistrer</button></div><div class="nomPrenom"><p>Old Password :<input class="entourage" type="password" id="OP"></p><p>New Password :<input class="entourage" type="password" id="NP"></div></p><div class="centerpls"></p><button class="butonuse" onclick="SetUserPassword()">Enregistrer</button></div></div>';

?>
