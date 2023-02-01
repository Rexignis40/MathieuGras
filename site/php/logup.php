<?php
require_once "config.php";
if(!isset($_POST['first_name']) || !isset($_POST['name']) || !isset($_POST['password']) || !isset($_POST['email']) || !isset($_POST['age']) || !isset($_POST['num']) || !isset($_POST['adresse'])){
    
    header('Location: ../user.php');
    exit();
}

$pre = $pdo->prepare("INSERT INTO user(first_name,name,email,age,password,num,adresse) VALUES(:first_name,:name,:email,:age,:password,:num,:adresse)");
$pre->execute(array(
    ':first_name' =>$_POST['first_name'],
    ':name'   => $_POST['name'],
    ':password'=> sha1(md5($_POST['password']."vdvfdgdf234567890°+£µ*%MPHBN?KOYGHBsgvdf788383fdvfdf4894891154bdfbdsvdfv")."4g8rez48v4rfbg56re4b5fd78hf5b4reh486fe4g8re8"),
    ':email'=> $_POST['email'],
    ':age' => $_POST["age"],
    ":num" => $_POST["num"],
    ":adresse" => $_POST["adresse"]
    ));
$_SESSION["output"] = "Compte créer";
header('Location: ../user.php');

?>