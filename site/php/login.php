<?php 
require_once "config.php";

if(empty($_POST['name'])){
    header('Location:index.php');
    $_SESSION['error']="Pseudo vide, veuillez réessayer";
}elseif(empty($_POST['password'])){
    $_SESSION['error']="Password vide, veuillez réessayer";
}

$sql = "SELECT * FROM user WHERE name=:name AND password=sha1(:password)"; 
$pre = $pdo->prepare($sql);
$pre->bindParam(":name",$_POST['name']);
$pre->bindParam(":password",$_POST['password']);
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){
    echo "Utilisateur ou mot de passe incorrect !";
    header('Location:index.php');
}else{
    $_SESSION['user'] = $user; 
    header('Location:aceuille.php');
}
?>