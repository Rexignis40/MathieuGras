<?php 
require_once "config.php";

if(empty($_POST['name'])){
    header('Location:index.php');
    $_SESSION['error']="Pseudo vide, veuillez réessayer";
}elseif(empty($_POST['password'])){
    $_SESSION['error']="Password vide, veuillez réessayer";
}

$sql = "SELECT * FROM user WHERE name=:name AND password=:password"; 
$pre = $pdo->prepare($sql); 
$pre->bindParam(":name",$_POST['name']);
$pre->bindValue(":password",sha1(sha1($_POST['password']."vdvfdgdf234567890°+£µ*%MPHBN?KOYGHBsgvdf788383fdvfdf4894891154bdfbdsvdfv")."4g8rez48v4rfbg56re4b5fd78hf5b4reh486fe4g8re8"));
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){
    echo "Utilisateur ou mot de passe incorrect !";
    header('Location:index.php');
}else{
    $_SESSION['user'] = $user; 
    header('Location: ../page/user.php');
}
?>