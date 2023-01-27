<?php 
require_once "config.php";

if(!isset($_POST['name']) || !isset($_POST['password'])){
    $_SESSION['output'] = "Pseudo ou mot de passe vide";
    header('Location:user.php');
}

$sql = "SELECT * FROM user WHERE name=:name AND password=:password"; 
$pre = $pdo->prepare($sql); 
$pre->bindParam(":name",$_POST['name']);
$pre->bindValue(":password",sha1(sha1($_POST['password']."vdvfdgdf234567890°+£µ*%MPHBN?KOYGHBsgvdf788383fdvfdf4894891154bdfbdsvdfv")."4g8rez48v4rfbg56re4b5fd78hf5b4reh486fe4g8re8"));
$pre->execute();
if($pre->rowCount() != 1){
    $_SESSION['output'] =  "Utilisateur ou mot de passe incorrect !";
    header('Location:../user.php');
}else{
    $_SESSION['output'] = "Connecter";
    $_SESSION['user'] = $pre->fetch(PDO::FETCH_ASSOC);
    header('Location: ../user.php');
}
?>