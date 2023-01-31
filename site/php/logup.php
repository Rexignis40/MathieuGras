<?php
require_once "config.php";
if(empty($_POST['first_name'])){
    $_SESSION['error']="Prénom vide, veuillez réessayer";
    header('Location: ../user.php');
}if(empty($_POST['name'])){
    $_SESSION['error']="Nom vide, veuillez réessayer";
    header('Location: ../user.php');
}elseif(empty($_POST['password'])){
    $_SESSION['error']="Password vide, veuillez réessayer";
    header('Location: ../user.php');
}elseif(empty($_POST['email'])){
    $_SESSION['error']="email vide, veuillez réessayer";
    header('Location: ../user.php');
}elseif(empty($_POST['age'])){
    $_SESSION['error']="age vide, veuillez réessayer";
    header('Location: ../user.php');
}elseif(empty($_POST['num'])){
    $_SESSION['error']="num vide, veuillez réessayer";
    header('Location: ../user.php');
}elseif(empty($_POST['adresse'])){
    $_SESSION['error']="adresse vide, veuillez réessayer";
    header('Location: ../user.php');
}else{
    $sql = "INSERT INTO user(first_name,name,email,age,password,num,adresse) VALUES(:first_name,:name,:email,:age,:password,:num,:adresse)";
    $dataBinded=array(
    ':fisrt_name' =>$_POST['first_name'],
    ':name'   => $_POST['name'],
    ':password'=> sha1(sha1($_POST['password']."vdvfdgdf234567890°+£µ*%MPHBN?KOYGHBsgvdf788383fdvfdf4894891154bdfbdsvdfv")."4g8rez48v4rfbg56re4b5fd78hf5b4reh486fe4g8re8"),
    ':email'=> $_POST['email'],
    ':age' => $_POST["age"],
    ":num" => $_POST["num"],
    ":adresse" => $_POST["adresse"]
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    header('Location: ../user.php');
}
?>