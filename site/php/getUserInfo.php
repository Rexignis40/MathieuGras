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
    echo "<h2>".$user["name"]."</h2><p>".$user["email"]."</p><p>".$user["adresse"]."</p><p>".$user["num"]."</p>";
}
?>