<?php 
require_once "config.php";

if(!isset($_POST['password']) || !isset($_POST['email']) ){
    $_SESSION['output'] = "Email ou/et mot de passe vide";
    header('Location:user.php');  
}
$sql = "SELECT * FROM user WHERE email=:email AND password=:password"; 
$pre = $pdo->prepare($sql); 
$pre->bindParam(":email",$_POST['email']);
$pre->bindValue(":password",sha1(md5($_POST['password']."vdvfdgdf234567890°+£µ*%MPHBN?KOYGHBsgvdf788383fdvfdf4894891154bdfbdsvdfv")."4g8rez48v4rfbg56re4b5fd78hf5b4reh486fe4g8re8"));
$pre->execute();
if($pre->rowCount() != 1){
    $_SESSION['output'] =  "Email ou mot de passe incorrect !";
    header('Location:../user.php');
}else{
    $_SESSION['output'] = "Vous êtes bien connecté";
    $_SESSION['user'] = $pre->fetch(PDO::FETCH_ASSOC);
    header('Location: ../index.php');
}     
?>