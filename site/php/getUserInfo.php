<?php
require_once("config.php");
if(!isset($_POST["id"])){
    exit();
}

$q = $pdo->prepare("SELECT name, age, email, adresse, num FROM user WHERE id=:id");
$q->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
$q->execute();


if($q->rowCount() == 1){
    $user = $q->fetch();
    echo "<h2>".$user["name"].'</h2><input type="text" id="N"><p>'.$user["email"].'</p><input type="mail" id="M"><p>'.$user["adresse"]."</p><p>".$user["num"].'</p><input type="text" id="N" value>';
}
?>
